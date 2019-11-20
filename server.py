import pyrebase
import collections
firebaseConfig = {
    'apiKey': "AIzaSyAv-nsPkjfYpJEQCronLRkewjwuqJAc6-4",
    'authDomain': "thewebsite-90faa.firebaseapp.com",
    'databaseURL': "https://thewebsite-90faa.firebaseio.com",
    'projectId': "thewebsite-90faa",
    'storageBucket': "thewebsite-90faa.appspot.com",
    'messagingSenderId': "675941477802",
    'appId': "1:675941477802:web:f64053cecc3abd7c10cfd3",
    'measurementId': "G-LXZBV49QK3"
  }
firebase = pyrebase.initialize_app(firebaseConfig)
db = firebase.database()

from flask import Flask, render_template, request, redirect, url_for
app = Flask(__name__)

@app.route('/')
def render_index():
    return render_template('home.html')

@app.route('/gallery.php')
def render_gallery():
    return render_template('gallery.html')

@app.route('/events.html')
def render_events():
    Events =  collections.OrderedDict(sorted(db.child('Events').get().val().items()))
    return render_template('events.html', t=Events.values())

@app.route('/about.html')
def render_about():
    Team = collections.OrderedDict(sorted(db.child('Team').get().val().items()))
    WhoWeAre = db.child('Who We Are').get().val()
    HowWeWork = db.child('How We Work').get().val()
    return render_template('about.html',t=Team.values(), whoweare=WhoWeAre, howwework=HowWeWork)

@app.route('/supportUs.html')
def render_support():
    Merch = collections.OrderedDict(sorted(db.child('Merch').get().val().items()))
    return render_template('supportUs.html',t=Merch.values())

@app.route('/demo.html')
def render_demo():
    return render_template('demo.html')

@app.route('/upcomingEventsDeets.html')
def render_upcomingEvents():
    return render_template('upcomingEventsDeets.html')

@app.route('/previousEventsDeets.html')
def render_previousEvents():
    return render_template('previousEventsDeets.html')

@app.route('/contact.html')
def render_contact():
    return render_template('contact.html')

@app.route('/UI_Index.html')
def render_UIindex():
    return render_template('UI_Index.html')

@app.route('/UI_updateContact.html')
def render_UI_updateContact():
    Address = db.child('Contact').child('Address').get().val()
    Contact = db.child('Contact').child('Contact').get().val()
    return render_template('UI_updateContact.html', address=Address, contact=Contact)

@app.route('/UI_updateFooter.html')
def render_UI_updateFooter():
    About = db.child('About').get().val()
    return render_template('UI_updateFooter.html', about=About)

@app.route('/UI_updateAboutUs.html')
def render_UI_updateAboutUs():
    Team = collections.OrderedDict(sorted(db.child('Team').get().val().items())).values()
    for i in Team:
        if type(i) != type(''):
            next_priority = i['Priority']
    next_priority = int(next_priority)+1
    WhoWeAre = db.child('Who We Are').get().val()
    HowWeWork = db.child('How We Work').get().val()
    return render_template('UI_updateAboutUs.html', t=Team, whoweare=WhoWeAre, howwework=HowWeWork, Next_priority=next_priority)

@app.route('/UI_updateSupportUs.html')
def render_UI_updateSupportUs():
    Merch = collections.OrderedDict(sorted(db.child('Merch').get().val().items())).values()
    for i in Merch:
        if type(i) != type(''):
            next_priority = i['Priority']
    next_priority = int(next_priority)+1
    return render_template('UI_updateSupportUs.html', t=Merch, Next_priority=next_priority)

@app.route('/UI_updateEvents.html')
def render_UI_updateEvents():
    Events = collections.OrderedDict(sorted(db.child('Events').get().val().items())).values()
    prev_num = 0
    for i in Events:
        if type(i) != type(''):
            prev_num = i['Num']
            break
    prev_num = int(prev_num)-1
    return render_template('UI_updateEvents.html', t=Events,prev_num=prev_num)

@app.route('/update_who_we_are',methods=['GET','POST'])
def update_who_we_are():
    if request.method == 'POST':
        whoweare = request.form['WhoWeAre']
        db.update({'Who We Are':whoweare})
        return redirect(url_for('render_UI_updateAboutUs'))

@app.route('/update_how_we_work',methods=['GET','POST'])
def update_how_we_work():
    if request.method == 'POST':
        howework = request.form['HowWeWork']
        db.update({'How We Work':howework})
        return redirect(url_for('render_UI_updateAboutUs'))

@app.route('/update_team_member',methods=['GET','POST'])
def update_team_member():
    if request.method == 'POST':
        if 'delete' in request.form:
            db.child('Team').child(request.form['old_priority']).remove()
        if 'update' in request.form:
            #remember to apply the string modifications to the drive link
            db.child('Team').child(request.form['old_priority']).remove()
            photo_link_temp = request.form['photo_link'].replace('/view?usp=sharing','')
            photo_link = photo_link_temp.replace('file/d/', 'uc?id=')
            db.child('Team').child(request.form['old_priority']).update({'Name':request.form['name'],'Post':request.form['post'],'Photo Link':photo_link,'Email':request.form['email'], 'Priority':request.form['old_priority']})
        return redirect(url_for('render_UI_updateAboutUs'))

@app.route('/update_merch_item',methods=['GET','POST'])
def update_merch_item():
    if request.method == 'POST':
        if 'delete' in request.form:
            db.child('Merch').child(request.form['old_priority']).remove()
        if 'update' in request.form:
            #remember to apply the string modifications to the drive link
            db.child('Merch').child(request.form['old_priority']).remove()
            photo_link_temp = request.form['photo_link'].replace('/view?usp=sharing','')
            photo_link = photo_link_temp.replace('file/d/', 'uc?id=')
            db.child('Merch').child(request.form['old_priority']).update({'Item':request.form['item'],'Price':request.form['price'],'Photo Link':photo_link,'Link':request.form['link'], 'Priority':request.form['old_priority']})
        return redirect(url_for('render_UI_updateSupportUs'))

@app.route('/add_team_member',methods=['GET','POST'])
def add_team_member():
    if request.method == 'POST':
        photo_link_temp = request.form['photo_link'].replace('/view?usp=sharing','')
        photo_link = photo_link_temp.replace('file/d/', 'uc?id=')
        db.child('Team').child(request.form['priority']).update({'Name':request.form['name'],'Post':request.form['post'],'Photo Link':photo_link,'Email':request.form['email'],'Priority':request.form['priority']})
    return redirect(url_for('render_UI_updateAboutUs'))

@app.route('/add_merch_item',methods=['GET','POST'])
def add_merch_item():
    if request.method == 'POST':
        photo_link_temp = request.form['photo_link'].replace('/view?usp=sharing','')
        photo_link = photo_link_temp.replace('file/d/', 'uc?id=')
        db.child('Merch').child(request.form['priority']).update({'Item':request.form['item'],'Price':request.form['price'],'Photo Link':photo_link,'Link':request.form['link'],'Priority':request.form['priority']})
    return redirect(url_for('render_UI_updateSupportUs'))

@app.route('/go_to_index',methods=['GET','POST'])
def go_to_index():
    if request.method == 'POST':
        return redirect('UI_Index.html')

@app.route('/update_event',methods=['GET','POST'])
def update_event():
    if request.method == 'POST':
        if 'delete' in request.form:
            #wanna add the confirm box
            db.child('Events').child(request.form['num']).remove()
        if 'update' in request.form:
            db.child('Events').child(request.form['num']).remove()
            poster_temp = request.form['poster'].replace('/view?usp=sharing','')
            poster = poster_temp.replace('file/d/', 'uc?id=')
            event_folder_link_temp = request.form['photos'].replace('open','embeddedfolderview')
            event_folder_link = event_folder_link_temp + '#grid'
            db.child('Events').child(request.form['num']).update({'Title':request.form['title'],'Description':request.form['description'],'Poster':poster,'Photos':event_folder_link, 'Num':request.form['num']})
        return redirect(url_for('render_UI_updateEvents'))

@app.route('/add_event',methods=['GET','POST'])
def add_event():
    if request.method == 'POST':
        poster_temp = request.form['poster'].replace('/view?usp=sharing','')
        poster = poster_temp.replace('file/d/', 'uc?id=')
        event_folder_link_temp = request.form['photos'].replace('open','embeddedfolderview')
        event_folder_link = event_folder_link_temp + '#grid'
        db.child('Events').child(request.form['num']).update({'Title':request.form['title'],'Description':request.form['description'],'Poster':poster,'Photos':event_folder_link, 'Num':request.form['num']})
    return redirect(url_for('render_UI_updateEvents'))


@app.route('/update_Footer',methods=['GET','POST'])
def update_Footer():
    if request.method == 'POST':
        About = request.form['about']
        db.update({'About':About})
        return redirect(url_for('render_UI_updateFooter'))

@app.route('/update_contact',methods=['GET','POST'])
def update_contact():
    if request.method == 'POST':
        Contact = request.form['contact']
        db.child('Contact').update({'Contact':Contact})
        return redirect(url_for('render_UI_updateContact'))

@app.route('/update_address',methods=['GET','POST'])
def update_address():
    if request.method == 'POST':
        Address = request.form['address']
        db.child('Contact').update({'Address':Address})
        return redirect(url_for('render_UI_updateContact'))

if __name__=='__main__':
    app.run(debug=True)
