from flask import Flask,render_template

app = Flask(__name__)

@app.route("/")
def index():
    print('Welcome');

if __name__ == "_test_":
    app.run()