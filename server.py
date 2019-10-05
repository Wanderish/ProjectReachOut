from flask import Flask, render_template
app = Flask(__name__)

@app.route('/')
def render_index():
    return render_template('index.php')

@app.route('/gallery.php')
def render_gallery():
    return render_template('gallery.php')

@app.route('/about.html')
def render_about():
    return render_template('about.html')

if __name__=='__main__':
    app.run(debug=True)
