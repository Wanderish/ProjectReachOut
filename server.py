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
auth = firebase.auth()
from flask import Flask, render_template, request, redirect, url_for
app = Flask(__name__)

@app.route('/')
def render_index():
    events = db.child('Events').get().val()
    return render_template('home.html', t=events.values())

@app.route('/events.html')
def render_events():
    Events =  collections.OrderedDict(sorted(db.child('Events').get().val().items()))
    events = db.child('Events').get().val()
    return render_template('events.html', t=events.values())

@app.route('/specials.html')
def render_specials():
    Specials = collections.OrderedDict(sorted(db.child('Seasonal Products').get().val().items()))
    return render_template('specials.html', t=Specials.values())

@app.route('/joinUs.html')
def render_joinUs():
    return render_template('joinUs.html')

@app.route('/about.html')
def render_about():
    Team = collections.OrderedDict(sorted(db.child('Team').get().val().items()))
    WhoWeAre = db.child('Who We Are').get().val()
    HowWeWork = db.child('How We Work').get().val()
    return render_template('about.html',t=Team.values(), whoweare=WhoWeAre, howwework=HowWeWork)

@app.route('/supportUs.html')
def render_support():
    Merch = collections.OrderedDict(sorted(db.child('Merch').get().val().items()))
    Specials_desc = db.child('Seasonal').child('Description').get().val()
    Specials_photo = db.child('Seasonal').child('Photo_link').get().val()
    Generic_desc = db.child('Merch').child('Generic Desc').get().val()
    return render_template('supportUs.html',t=Merch.values(),S_desc = Specials_desc,S_photo = Specials_photo, G_desc = Generic_desc)

@app.route('/upcomingEventsDeets.html',methods=['GET','POST'])
def render_upcomingEvents():
    event_num = request.args.get('type')
    event_deets = db.child('Events').child(event_num).get().val()
    return render_template('upcomingEventsDeets.html',details=event_deets)

@app.route('/previousEventsDeets.html',methods=['GET','POST'])
def render_previousEvents():
    event_num = request.args.get('type')
    event_deets = db.child('Events').child(event_num).get().val()
    return render_template('previousEventsDeets.html', details=event_deets)

@app.route('/contact.html')
def render_contact():
    contact = db.child('Contact').child('Contact').get().val()
    line1 = db.child('Contact').child('Address').child('Line1').get().val()
    line2 = db.child('Contact').child('Address').child('Line2').get().val()
    line3 = db.child('Contact').child('Address').child('Line3').get().val()
    return render_template('contact.html',contact=contact,line1=line1,line2=line2,line3=line3)

@app.route('/UI_Index.html')
def render_UIindex():
    return render_template('UI_Index.html')

@app.route('/UI.html',methods=['POST'])
def render_UI():
    email = 'projectreachoutmys@gmail.com'
    password = request.form['password']
    try:
        user = auth.sign_in_with_email_and_password(email, password)
        return render_template('UI.html')
    except:
        return render_template('UI_Indexwrong.html')

@app.route('/reset_password',methods=['POST'])
def reset_password():
    email = 'projectreachoutmys@gmail.com'
    auth.send_password_reset_email(email)
    return render_template('reset_message.html')

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
    priority = 0
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
    Seasonal_Products = collections.OrderedDict(sorted(db.child('Seasonal Products').get().val().items())).values()
    S_Desc = db.child('Seasonal').child('Description').get().val()
    Desc = db.child('Merch').child('Generic Desc').get().val()
    next_priority = 0
    next_id = 0
    for i in Merch:
        if type(i) != type(''):
            next_priority = i['Priority']
    for i in Seasonal_Products:
        if type(i) != type(''):
            next_id_ = i['Id']
    next_id = int(next_id_)+1
    return render_template('UI_updateSupportUs.html', t=Merch, Next_priority=next_priority, spec_desc=S_Desc, s=Seasonal_Products, Next_id=next_id, merch_desc=Desc )

@app.route('/UI_updateEvents.html')
def render_UI_updateEvents():
    Events = collections.OrderedDict(sorted(db.child('Events').get().val().items())).values()
    events = db.child('Events').get().val()
    prev_num = 0
    for i in Events:
        if type(i) != type(''):
            if prev_num > int(i['Num']):
                prev_num = int(i['Num'])
    prev_num = (prev_num)-1
    return render_template('UI_updateEvents.html', t=events.values(),prev_num=prev_num)

@app.route('/update_who_we_are',methods=['GET','POST'])
def update_who_we_are():
    if request.method == 'POST':
        whoweare = request.form['WhoWeAre']
        db.update({'Who We Are':whoweare})
        return redirect('UI_updateAboutUs.html')

@app.route('/update_how_we_work',methods=['GET','POST'])
def update_how_we_work():
    if request.method == 'POST':
        howework = request.form['HowWeWork']
        db.update({'How We Work':howework})
        return redirect('UI_updateAboutUs.html')

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
        return redirect('UI_updateAboutUs.html')

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
        return redirect('UI_updateSupportUs.html')

@app.route('/update_special_merch_item',methods=['GET','POST'])
def update_special_merch_item():
    if request.method == 'POST':
        if 'delete' in request.form:
            db.child('Seasonal Products').child(request.form['id']).remove()
        if 'update' in request.form:
            #remember to apply the string modifications to the drive link
            db.child('Seasonal Products').child(request.form['id']).remove()
            photo_link_temp = request.form['photo_link'].replace('/view?usp=sharing','')
            photo_link = photo_link_temp.replace('file/d/', 'uc?id=')
            db.child('Seasonal Products').child(request.form['id']).update({'Name':request.form['name'],'Price':request.form['price'],'Pic Link':photo_link,'Link':request.form['link'], 'Id':request.form['id']})
        return redirect('UI_updateSupportUs.html')

@app.route('/add_team_member',methods=['GET','POST'])
def add_team_member():
    if request.method == 'POST':
        photo_link_temp = request.form['photo_link'].replace('/view?usp=sharing','')
        photo_link = photo_link_temp.replace('file/d/', 'uc?id=')
        db.child('Team').child(request.form['priority']).update({'Name':request.form['name'],'Post':request.form['post'],'Photo Link':photo_link,'Email':request.form['email'],'Priority':request.form['priority']})
    return redirect('UI_updateAboutUs.html')

@app.route('/add_merch_item',methods=['GET','POST'])
def add_merch_item():
    if request.method == 'POST':
        photo_link_temp = request.form['photo_link'].replace('/view?usp=sharing','')
        photo_link = photo_link_temp.replace('file/d/', 'uc?id=')
        db.child('Merch').child(request.form['priority']).update({'Item':request.form['item'],'Price':request.form['price'],'Photo Link':photo_link,'Link':request.form['link'],'Priority':request.form['priority']})
    return redirect('UI_updateSupportUs.html')

@app.route('/add_special_merch_item',methods=['GET','POST'])
def add_special_merch_item():
    if request.method == 'POST':
        photo_link_temp = request.form['photo_link'].replace('/view?usp=sharing','')
        photo_link = photo_link_temp.replace('file/d/', 'uc?id=')
        db.child('Seasonal Products').child(request.form['id']).update({'Name':request.form['name'],'Price':request.form['price'],'Pic Link':photo_link,'Link':request.form['link'],'Id':request.form['id']})
    return redirect('UI_updateSupportUs.html')

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
            if request.form['photos'] != '' :
                if request.form['old_link']!=request.form['photos']:
                    event_folder_link_temp = request.form['photos'].replace('open','embeddedfolderview')
                    event_folder_link = event_folder_link_temp + '#grid'
                    db.child('Events').child(request.form['num']).update({'Title':request.form['title'],'Date':request.form['date'],'Description':request.form['description'],'Poster':poster,'Photos':event_folder_link, 'Num':request.form['num'], 'Venue':request.form['venue'], 'Time':request.form['time'], 'Form':request.form['form']})
                else:
                    db.child('Events').child(request.form['num']).update({'Title':request.form['title'],'Date':request.form['date'],'Description':request.form['description'],'Poster':poster,'Photos':request.form['old_link'], 'Num':request.form['num'], 'Venue':request.form['venue'], 'Time':request.form['time'], 'Form':request.form['form']})
            else:
                db.child('Events').child(request.form['num']).update({'Title':request.form['title'],'Date':request.form['date'],'Description':request.form['description'],'Poster':poster, 'Num':request.form['num'],'Venue':request.form['venue'], 'Time':request.form['time'],'Form':request.form['form']})
        return redirect('UI_updateEvents.html')

@app.route('/add_event',methods=['GET','POST'])
def add_event():
    if request.method == 'POST':
        poster_temp = request.form['poster'].replace('/view?usp=sharing','')
        poster = poster_temp.replace('file/d/', 'uc?id=')
        if request.form['photos'] != '':
            event_folder_link_temp = request.form['photos'].replace('open','embeddedfolderview')
            event_folder_link = event_folder_link_temp + '#grid'
            db.child('Events').child(request.form['num']).update({'Title':request.form['title'],'Date':request.form['date'],'Description':request.form['description'],'Poster':poster,'Photos':event_folder_link, 'Num':request.form['num'],'Venue':request.form['venue'], 'Time':request.form['time'], 'Form':request.form['form']})
        else:
            db.child('Events').child(request.form['num']).update({'Title':request.form['title'],'Date':request.form['date'],'Description':request.form['description'],'Poster':poster, 'Num':request.form['num'],'Venue':request.form['venue'], 'Time':request.form['time'], 'Form':request.form['form']})
    return redirect('UI_updateEvents.html')


@app.route('/update_Footer',methods=['GET','POST'])
def update_Footer():
    if request.method == 'POST':
        About = request.form['about']
        db.update({'About':About})
        return redirect('UI_updateFooter.html')

@app.route('/update_contact',methods=['GET','POST'])
def update_contact():
    if request.method == 'POST':
        Contact = request.form['contact']
        db.child('Contact').update({'Contact':Contact})
        return redirect('UI_updateContact.html')

@app.route('/update_special_desc',methods=['GET','POST'])
def update_special_desc():
    if request.method == 'POST':
        Desc = request.form['special_desc']
        db.child('Seasonal').update({'Description':Desc})
        return redirect('UI_updateSupportUs.html')

@app.route('/update_merch_desc',methods=['GET','POST'])
def update_merch_desc():
    if request.method == 'POST':
        Desc = request.form['merch_desc']
        db.child('Merch').update({'Generic Desc':Desc})
        return redirect('UI_updateSupportUs.html')

@app.route('/update_address',methods=['GET','POST'])
def update_address():
    if request.method == 'POST':
        line1 = request.form['line1']
        line2 = request.form['line2']
        line3 = request.form['line3']
        db.child('Contact').child('Address').update({'Line1':line1, 'Line2':line2, 'Line3':line3})
        return redirect('UI_updateContact.html')

if __name__=='__main__':
    app.run(debug=True)
