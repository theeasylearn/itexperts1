Lecturer's Payment management system
---------------------------------
Tables 
    course (id,title,fees,duration,description)
    batch (id,courseid,startdate,enddate,classtime)
    subject (id,courseid,title,rate)
    teacher (id,name,mobile,email,gender,qulification,experience,photo)
    lecture(id,teacherid,subjectid,batchid,duration,amount,lecturedate,payoutid)
    payout(id,teacherid,orderdate,remarks,startdate,enddate)
    
Module 
    1) course management  (works on course)
        insert,update,delete,select
    2) batch management (works on batch,course)
        insert,update,delete,select
    3) subject management (works on subject,course)
        insert,update,delete,select
    4) teacher management (works on teacher)
        insert,update,delete,select
    5) lecture management (works on lecture,teacher,batch)
        insert,select
    6) payout management (works on batch)
        generate of specific teacher between given date, genrate pay order 
        view on payout table 
    7) reports
        generate batch wise lecture detail between given date 
        generate batch wise lecture detail with total amount
         



