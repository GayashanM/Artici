
# Smart Medical Report Analyzer (2020-091)

[![HitCount](http://hits.dwyl.com/janithRS/diabipal-app.svg)](http://hits.dwyl.com/janithRS/diabipal-app)
[![version](https://img.shields.io/badge/version-1.0.2-yellow.svg)](https://semver.org)
[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/janithRS/diabipal-app/issues)
[![Website shields.io](https://img.shields.io/website-up-down-green-red/http/shields.io.svg)](https://janithrs.github.io/cdap-diabipal-web/)
[![Made withJupyter](https://img.shields.io/badge/Made%20with-Jupyter-orange?style=for-the-badge&logo=Jupyter)](https://jupyter.org/try)

This project is developed associated with an ongoing research at Sri Lanka Institute of Information Technology 

*Predicting Diabetes Mellitus Using Machine Learning and Optical Character Recognition*

Diabetes is one of the most common chronic, incurable diseases at present. Currently, diabetes is diagnosed in more than 8% of the adult population (age 20–79 years) and leads to major cardiovascular diseases, which are very common among diabetic patients. Recent predictions report that this number can increase to 55% within two decades, which also raises the mortality rate caused by the disease. If not treated properly, it might become a gateway to other major chronic diseases. The early detection of pre-diabetic conditions can prevent the advancement of Diabetes Mellitus(DM). Typically, a sample of blood, urine, or other bodily fluids are taken by medical laboratories for tests to diagnose or monitor diseases. For diabetes, mostly blood samples are taken into consideration. Most of the patients lack the knowledge of their conditions, symptoms, and medications. Thus, each time they
must visit a doctor to get their laboratory test results analyzed. Transferring such paper-based medical data into digital documents seems a crucial task as the technology grows day by day.
This research work focuses on managing DM using machine learning techniques and Optical Character Recognition. In this work, the Random Forest machine learning algorithm is used and evaluated on the datasets to find the prediction of diabetes and Logistic Regression algorithm is implemented to predict the probability of cardiovascular diesease diagnosis. Image processing algorithms and Tesseract Optical Character Recognition (Tesseract OCR) engines are used to extract data from medical reports. A Knowledge Graph (KG) is used to improve the accuracy of the data obtained.

### Group Members
    
| Name | IT Number |
| ------ | ------ |
| W.A.J.R Silva | IT17111270 |
| H.M.K Shirantha | IT17127288 |
| R.A.D.V.K Ranasinghe | IT17111898 |
| L.J.M.V.N Balalla | IT17109918 |
| N. Kuruwitaarachchi | Supervisor |
| D. Kasthurirathne | Co-Supervisor |

### High Level Architecture Diagram

<div align="center">
  <img src="http://www.aimabank.com/assets/img/blog/system%20diagram.jpg" />
</div>

<div align="center">
  <img src="https://drive.google.com/file/d/1qtKlMf4_HwfxvARhOMLnNDpiM7mFTC5b/view" />
</div>

### Research Questions
- Is it possible to analyze a medical report using machine learning and image processing?
- What are the key factors that contribute the learning process of a ‘supervised learning method’ using machine learning?
- How to improve an existing optical character recognition system by investigating the current drawbacks?
- How can a patient communicate with a physician on a virtual environment?

### Research Objectives
#### Main Objective  
This research mainly focuses on developing a mobile application that can 
diagnose diabetes by analyzing a medical report. Condition of the disease 
will be predicted to patients to control diabetes, efficiently and 
effectively. This application will track all the previous reports of that 
patient and other conditions of them to give information about their current
stage. Also, from records, the application will predict the future risks 
that can be caused to the patient. The application helps the patient to 
connect and communicate with doctors and get the necessary information
as well.
    
#### Specific Objectives 

 - Accurately extract the data from a report and assigned to medical terms.
 
    >This research component is implemented to read diabetes related medical lab reports using OCR engines and image processing techniques. Few of the drawbacks of current systems are having the user to enter report results manually to the system, OCR engines failing to identify medical terms. And these problems can be tackled by using OpenCV, Tesseract OCR and knowledge graphs.
	
	- Use image processing techniques to enhance the image quality
	- Use Tesseract OCR engine to extract data from medical lab reports
	- Implement a knowledge graph with diabetes realted medical terms
	- Use the knowledge graph to improve the accuracy of the words extracted by the OCR engine
	
        
 - Implement a machine learning model to predict diabetes and provide recommendations.
 
    >The main objective of this individual research component is to analyze and implement a machine learning model that can predict diabetes of an individual based on his/her medical report(s) related to blood sugar. Based on the research gap identified from the existing literature, it was found that the accuracy of the existing diabetes diagnosis can be improved using optimization techniques. A comprehensive analysis report will be generated after the process of the individual component including nutrition, physical, sleep, behavioral and smoking suggestions. 
   
    - To implement a machine learning model to diagnose/ predict diabetes
    - To provide suggestions analyzing the data inputs with AACE/ACE Prediabetes Algorithm and Glycemic Control Algorithm
    - To provide nutrition suggestions based on the outcomes of the machine learning model
    - To provide physical/exercise suggestions based on the outcomes of the machine learning model
    - To provide sleep routine suggestions based on the outcomes of the machine learning model
    - To provide a lifestyle behavioral pattern suggestions based on the outcomes of the machine learning model
    - To provide smoking suggestions for smokers based on the outcomes of the machine learning model  

 - Predict the probability of a cardio-vascular diseases and medical suggestions based on patients' data
	
	>	This research component aims to bridge the gap between diabetes prevalence and the developement towards cardiovascular diseases.Prrvalence of longterm diabetes consition leads to the development of cardiovascular diseases. Most of the patients death are a cause due to these non-communicable diseases.Most of the diabetes patients are unaware of these conditions and tend to ignore the medical suggestions. 

	- Implement a machine learning model to underatand given inputs and predict if the user has a probablity of cardio-vascular disease.
	- Collect historic data on previous predictions and provide graphical representations 
	- Calculate the estimated values of BMR based and provide reccomendations for a healthy lifestyle.
		     
 - Build a human-computer Interaction System to connect
    the patient, application, and the doctor.
    
     >This individual component is implemented to connect the doctor with the patient using a virtual chat interface. Current systems are lacking to reduce the gap between the doctor and the patient in an efficient way. And these problems can be tackled by using Natural Language Processing in the chat interface. 

    - Read the patient question through chat interface and pass it to NLP for categorize whether it should answer through machine learning or send to a doctor.
    - Questions that can be answer through ML will go through training data to find the most matching answer. 
    - Questions that cannot answer through ML are send  to a doctor through E-mail with patient’s information
    - Email service is running to gather replies from doctors and add to the database with dividing the content separately
    - Best suitable doctor will be selected based on user’s medical condition and symptoms. 
        
 
### Code Structure
Since the individual components have their own code structures in this GitLab Repository the system is categorized in 
folders. The specification is given below.

| Folder Name | Author | Description |Technologies Used |
| ------ | ------ | ------ | ------ |
| IT17111270 | IT17111270 | This folder contains the source code of the machine learning model which was developed to predict diabetes and the Flask API backend | Flask, Python Notebook, Scikit, Pickle |
| IT17127288 | IT17127288 | This folder containd the source code od the machine learning model developed to predict the probabilit of being diagnosed with cardiovascular diseases and the Flask API backend | Flask, Python, Scikit, Pickle  |
| IT17111898 | IT17111898 | This folder contains the source code of the pre-processing and post-processing subsytems that reads the medical report | Image processing, Tesseract OCR, Flask, Python|
| IT17109918 | IT17109918 | This folder contains two parts. first one contains Spring Boot application of the chat system and the other one is a Flask application to suggest the best doctor | Spring Boot, Java, Flask, Python, Pickle, MySQL |
| diabipal | All Members | This folder contains the source code of the front end mobile application 'Diabipal' | Ionic-Angular, Typescript, Firebase, Firestore |

##### Please visit our [GitHub Repository](https://github.com/janithRS/diabipal-app) to view the full commit history on the mobile application

### How to run the code?

The below table describes how to run separate backend applications individually.

| Folder Name | Author | Application | Steps |
| ------ | ------ | ------ | ------ |
| IT17111270 | IT17111270 | Flask API backend of Diabetes Prediction Model | Run the command 'flask app.py' |
| IT17127288 | IT17127288 | Flask API backend of Cardiovascular disease Prediction Model | Run the command 'flask app.py' |
| IT17111898 | IT17111898 | Flask APIs for Pre-processing and Post-processing | Run the command 'flask app.py'|
| IT17109918 | IT17109918 | Spring Boot backend of chat application and Flask backend of doctor suggestion system | Run the Command 'mvn spring-boot:run' to run spring boot application and run the command 'flask run' to run Flask application |
| diabipal | All Members | Mobile Application 'Diabipal' | Run the command 'npm install' and 'ionic serve' |
  
 ### Deployed machine learning models can be found in these live Heroku applications
 
 | Application | Source Repository | Author | API |
 | ------ | ------ | ------ | ------ |
 | Image Processing Subsytem | [GitHub](https://github.com/kalnar328/Diabipal-OCR)| IT17111898 | [Heroku API](https://diabipal-ocr.herokuapp.com/) |
 | Word Correction Subsystem | [GitHub](https://github.com/kalnar328/DiabiPal-Knowledge-Graph) | IT17111898 | [Heroku API](https://diabipal-knowledge-graph.herokuapp.com/) |
 | Cardiovascular Prediction Model Backend| [GitHub](https://github.com/shirantha97/Cardio-Vascular_detection) | IT17127288 | [Heroku API](https://dry-lake-13859.herokuapp.com/) |
 | Diabetes Prediction Model Backend | [Github](https://github.com/janithRS/diabetes-prevention-system) | IT17111270 | [Heroku API](https://diabipal.herokuapp.com/) |
 | NLP chat system Backend | [Github](https://github.com/vimanga/med-bot-backend) | IT17109918 | [AWS](http://ec2-54-165-166-212.compute-1.amazonaws.com:8080/) |
