from flask import Flask, request, jsonify
from textblob import TextBlob
import numpy as np

app = Flask(__name__)

def calculate_sentiment_score(comments):
sentiments = [TextBlob(comment).sentiment.polarity for comment in comments]
return np.mean(sentiments) if sentiments else 0

def calculate_preference_match(user_prefs, club_categories):
return len(set(user_prefs) & set(club_categories)) / len(user_prefs) if user_prefs else 0

def normalize(values):
min_val, max_val = min(values), max(values)
if max_val == min_val:
return [1] * len(values)
return [(val - min_val) / (max_val - min_val) for val in values]

@app.route('/score_clubs', methods=['POST'])
def score_clubs():
data = request.json
clubs = data.get('clubs', [])
user_preferences = data.get('preferences', [])

club_scores = []
ratings, sentiments, preferences = [], [], []

for club in clubs:
avg_rating = np.mean(club['ratings'])
sentiment_score = calculate_sentiment_score(club['comments'])
preference_match = calculate_preference_match(user_preferences, club['categories'])

club_scores.append({
"id": club['id'],
"name": club['name'],
"avg_rating": avg_rating,
"sentiment_score": sentiment_score,
"preference_match": preference_match,
})

ratings.append(avg_rating)
sentiments.append(sentiment_score)
preferences.append(preference_match)

# Normalize scores
normalized_ratings = normalize(ratings)
normalized_sentiments = normalize(sentiments)
normalized_preferences = normalize(preferences)

# Weights
weights = {"rating": 0.4, "sentiment": 0.3, "preference": 0.3}

# Calculate final scores
for i, club in enumerate(club_scores):
club["final_score"] = (
weights["rating"] * normalized_ratings[i] +
weights["sentiment"] * normalized_sentiments[i] +
weights["preference"] * normalized_preferences[i]
)

# Sort clubs by final score
club_scores.sort(key=lambda x: x["final_score"], reverse=True)

return jsonify(club_scores)

if __name__ == '__main__':
app.run(debug=True, host='0.0.0.0', port=5000)