from flask import Flask, render_template
app = Flask(__name__)

@app.route('/')
def render_index():
    return render_template('home.html')

@app.route('/gallery.php')
def render_gallery():
    return render_template('gallery.html')

@app.route('/about.html')
def render_about():
    return render_template('about.html')

@app.route('/supportUs.html')
def render_support():
    return render_template('supportUs.html')

@app.route('/demo.html')
def render_demo():
    return render_template('demo.html')

@app.route('/upcomingEventsDeets.html')
def render_upcomingEvents():
    return render_template('upcomingEventsDeets.html')

if __name__=='__main__':
    app.run(debug=True)
