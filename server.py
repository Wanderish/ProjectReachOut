import pyrebase
import collections
from collections import OrderedDict
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
    # Events =  collections.OrderedDict(sorted(db.child('Events').get().val().items()))
    # events = db.child('Events').get().val()
    #Main Event Category Tab Values and their corresponding Events
    EventCategories = OrderedDict()
    EventCategories.update({'Eco-Consciousness' : [{'Date': '12-09-2019', 'Description': 'The ramp at Jaganmohan palace came live with lots of color and style. Unlike any other fashion ramp walks, the models made entrance in wheelchairs. The Fashionista2k19 was conducted by Destinigo in association with Project ReachOut with a tag, "See the able, not the lable". The event was focused on spreading the message of inclusiveness and provide equal chance to everyone. The auditions conducted prior to event saw 158 participants. The event was inaugurated by former Indian Blind Cricket team captain Shekar Naik, Para shooter Nagendra, president of mysuru travels, Prashanth B S and actor Roshini Prakash.', 'Form': 'njkkj', 'Num': '-7', 'Photos': 'https://drive.google.com/embeddedfolderview?id=103u_8tPzhNeOyZYyiXvZ50v6PyVHWBBA#grid', 'Poster': 'https://drive.google.com/uc?id=1drCqIQHGElMjVbaMkpYb9VtMxWp9-v9I', 'Time': '6pm', 'Title': 'Fashionista', 'Venue': 'Jaganmohan palace, Mysore'}, 
                                               {'Date': '21-02-2019', 'Description': 'Holding the tricolor under the street lights and the words of silence written on the white boards, volunteers marched from palace north gate through URS road through Maharaja grounds in the evening to symbolize the deep condolence and respect to all the jawans who lost their lives and many others who were injured in the terror attack of Jammu and Kashmir, Pulwama district. Around 1000 people dressed in black including the college students and senior citizens from all over Mysore joined us in the silent procession. At the end of the procession, the martyrs were given homage with flowers and lighted candles. DWIJA Conservation Society of India and Cultural Heritage were the major organizers along with us. District Security System helped and supported us throughout the march.', 'Form': 'nkjj', 'Num': '-6', 'Photos': 'https://drive.google.com/drive/folders/1-gsghm1TKoWIlW8LPKgmOqhxNiQ1sNCC?usp=sharing#grid', 'Poster': 'https://drive.google.com/uc?id=1dr4EiJyhG1LlY6irMJiyNzL3Fh4FfWo_', 'Time': '5pm', 'Title': 'March for Martyrs', 'Venue': 'Mysore'}]})

    EventCategories.update({'Water-Consciousness' : [{'Date': '12-09-2019', 'Description': 'The ramp at Jaganmohan palace came live with lots of color and style. Unlike any other fashion ramp walks, the models made entrance in wheelchairs. The Fashionista2k19 was conducted by Destinigo in association with Project ReachOut with a tag, "See the able, not the lable". The event was focused on spreading the message of inclusiveness and provide equal chance to everyone. The auditions conducted prior to event saw 158 participants. The event was inaugurated by former Indian Blind Cricket team captain Shekar Naik, Para shooter Nagendra, president of mysuru travels, Prashanth B S and actor Roshini Prakash.', 'Form': 'njkkj', 'Num': '-7', 'Photos': 'https://drive.google.com/embeddedfolderview?id=103u_8tPzhNeOyZYyiXvZ50v6PyVHWBBA#grid', 'Poster': 'https://drive.google.com/uc?id=1drCqIQHGElMjVbaMkpYb9VtMxWp9-v9I', 'Time': '6pm', 'Title': 'Fashionista', 'Venue': 'Jaganmohan palace, Mysore'}]})
    EventCategories.update({'Waste-Consciousness' : [{'Date': '05-10-2019', 'Description': 'Fun fare called "Divyang utsav" for specially abled kids was organized in Decathlon as part of the annual sports event called "sports utsav" by PRO. Colorful event brought together, all the gifted kids from in and around Mysore. The volunteers of PRO set up stalls which included fun filled games such as unmix the mix, ring in the ring, cup pyramid, musical chair, snake running and a lot more. It was such a delight to watch the children participate enthusiastically and their parents’ support and encouragement.  The excitement in the air, the awesome music for which the kids had a blast dancing, the adorable smile on their faces and that feeling of joy and happiness by their parents made the event even more enjoyable.', 'Form': '.,;l', 'Num': '-3', 'Photos': 'https://drive.google.com/folderview?id=1xH-NeUg6iGbbHcYSzGMwFA8zhbOa8Dyv#grid', 'Poster': 'lklkl', 'Time': '8am', 'Title': 'Divyang Utsav', 'Venue': 'Decathlon, Mysore'}, {'Date': ' Since 27 October 2019', 'Description': 'On 27th Oct 2019 PRO joined hands with ACHHALA in their third plogging activity Plog and Talk which focused on the single-use plastics, waste segregation, waste disposal and sustainable lifestyles. The Sunday plogs were open to all and every Sunday we were joined by amazing sets of people. In the course of four Sundays, covering one place at a time, we plogged our ways through the streets of Bogadi, Udaygiri, KD road and around SJCE, with hopes to create awareness, interact and understand the conditions better. After we were done filling our gunny bags with surprisingly huge amount of plastic waste, we’d talk and reflect on things encountered that day. Every participant had the opportunity to raise issues, brainstorm solutions to them and information exchange. One of the most valuable inputs was given by tipper drivers and Mr Ayub Khan, the corporator, Ex-Mayor of Mysore City Corporation.', 'Form': ',mnk', 'Num': '-2', 'Photos': 'https://drive.google.com/drive/folders/1bqL2l8pXDi9ZABX6XyilapjIPRNmy7bR?usp=sharing#grid', 'Poster': 'https://drive.google.com/open?id=150BpGiflNKRdcE7dT6ETGU0x_H-a2ChF', 'Time': '7 am', 'Title': 'Plog and Talk', 'Venue': 'Mysore'}, {'Date': '27-10-2019', 'Description': 'Diya sale is majorly important annual fundraising event which brings together many of our volunteers and the students of special schools working in harmony. The synergy resulting in the beautiful bedazzled and customized Diyas. Hundreds of these Diyas are made every year and sold out during the festival of lights, "Diwali" to many satisfied customers all over the city. The customers get to choose from the plethora of designs and also order for some specific designs. But in the end it is all the hard work of the students and numerous volunteers that pays off to be able to raise funds for a noble cause. The funds are used for various causes like paying school fees for an underprivileged kid, donating to schools for the specially abled, orphanages etc. As a valued member of our school for the past three years I wanted to take the opportunity to thank you for hard work and dedication to the specially abled children. Throughout these past years we had the opportunity to work with many people. However you stand out the best group with your commitments and hard work,  ethics and personal integrity .we appreciate and immensely thank you for all you do as part of service towards  Society joining hands with us and to create a better and beautiful society.', 'Form': 'j,,hujhjhu', 'Num': '-1', 'Photos': 'https://drive.google.com/embeddedfolderview?id=1aDR5nbPUtc01-K9R760MjN3BNcxOIs1A#grid', 'Poster': 'https://drive.google.com/open?id=1aDR5nbPUtc01-K9R760MjN3BNcxOIs1A', 'Time': '10am', 'Title': 'Diya Sale', 'Venue': 'Mysore'}]})
    return render_template('events.html', EventCategories=EventCategories)

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
    S_link = db.child('Seasonal').child('Photo_link').get().val()
    Desc = db.child('Merch').child('Generic Desc').get().val()
    next_priority = 0
    next_id_ = 0
    for i in Merch:
        if type(i) != type(''):
            next_priority = i['Priority']
    for i in Seasonal_Products:
        if type(i) != type(''):
            next_id_ = i['Id']
    next_id = int(next_id_)+1
    return render_template('UI_updateSupportUs.html', t=Merch, Next_priority=next_priority, spec_desc=S_Desc, s=Seasonal_Products, Next_id=next_id, merch_desc=Desc, S_link = S_link )

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
        return render_UI_updateAboutUs()

@app.route('/update_how_we_work',methods=['GET','POST'])
def update_how_we_work():
    if request.method == 'POST':
        howework = request.form['HowWeWork']
        db.update({'How We Work':howework})
        return render_UI_updateAboutUs()

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
        return render_UI_updateAboutUs()

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
        return render_UI_updateSupportUs()

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
        return render_UI_updateSupportUs()

@app.route('/add_team_member',methods=['GET','POST'])
def add_team_member():
    if request.method == 'POST':
        photo_link_temp = request.form['photo_link'].replace('/view?usp=sharing','')
        photo_link = photo_link_temp.replace('file/d/', 'uc?id=')
        db.child('Team').child(request.form['priority']).update({'Name':request.form['name'],'Post':request.form['post'],'Photo Link':photo_link,'Email':request.form['email'],'Priority':request.form['priority']})
    return render_UI_updateAboutUs()

@app.route('/add_merch_item',methods=['GET','POST'])
def add_merch_item():
    if request.method == 'POST':
        photo_link_temp = request.form['photo_link'].replace('/view?usp=sharing','')
        photo_link = photo_link_temp.replace('file/d/', 'uc?id=')
        db.child('Merch').child(request.form['priority']).update({'Item':request.form['item'],'Price':request.form['price'],'Photo Link':photo_link,'Link':request.form['link'],'Priority':request.form['priority']})
    return render_UI_updateSupportUs()

@app.route('/add_special_merch_item',methods=['GET','POST'])
def add_special_merch_item():
    if request.method == 'POST':
        photo_link_temp = request.form['photo_link'].replace('/view?usp=sharing','')
        photo_link = photo_link_temp.replace('file/d/', 'uc?id=')
        db.child('Seasonal Products').child(request.form['id']).update({'Name':request.form['name'],'Price':request.form['price'],'Pic Link':photo_link,'Link':request.form['link'],'Id':request.form['id']})
    return render_UI_updateSupportUs()

@app.route('/go_to_index',methods=['GET','POST'])
def go_to_index():
    if request.method == 'POST':
        return render_UIindex()

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
        return render_UI_updateEvents()

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
    return render_UI_updateEvents()


@app.route('/update_Footer',methods=['GET','POST'])
def update_Footer():
    if request.method == 'POST':
        About = request.form['about']
        db.update({'About':About})
        return render_UI_updateFooter()

@app.route('/update_contact',methods=['GET','POST'])
def update_contact():
    if request.method == 'POST':
        Contact = request.form['contact']
        db.child('Contact').update({'Contact':Contact})
        return render_UI_updateContact()

@app.route('/update_special_desc',methods=['GET','POST'])
def update_special_desc():
    if request.method == 'POST':
        Desc = request.form['special_desc']
        Link = request.form['photo_link']
        db.child('Seasonal').update({'Description':Desc},{'Photo_link':Link})
        return render_UI_updateSupportUs()

@app.route('/update_merch_desc',methods=['GET','POST'])
def update_merch_desc():
    if request.method == 'POST':
        Desc = request.form['merch_desc']
        db.child('Merch').update({'Generic Desc':Desc})
        return render_UI_updateSupportUs()

@app.route('/update_address',methods=['GET','POST'])
def update_address():
    if request.method == 'POST':
        line1 = request.form['line1']
        line2 = request.form['line2']
        line3 = request.form['line3']
        db.child('Contact').child('Address').update({'Line1':line1, 'Line2':line2, 'Line3':line3})
        return render_UI_updateContact()

if __name__=='__main__':
    app.run(debug=True)
