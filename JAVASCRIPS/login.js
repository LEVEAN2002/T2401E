function login(){
    let username=document.getElementById("username").value;
    let password=document.getElementById("password").value;
    
    if(username=="admin" && password=="123"){
        alert('Login Successful');
        return true;
    }else{
        alert('Invalid Username or Password');
        return false;
    }
}
// function  checkIndexedDB(){
//     return "indexedDB" in window;
// }

// let db;
// document.addEventListener("DOMContentLoaded", function (){
//     if(!checkIndexedDB()){
//         return;
//     }
//     let requestOpen = indexedDB.open("Info",1);
//     requestOpen.onupgradeneeded = function (e){
//         let dbIndex = e.target.result;
//         let objectStorage = dbIndex.createObjectStore("student", {autoIncrement:true});
//         objectStorage.createIndex("name","name",{unique:false});
//     }
//     requestOpen.onsuccess = function (e){
//         console.log("create db success");
//         db = e.target.result;
//     }
//     requestOpen.onerror = function (e){
//         console.log("create db error");
//     }
// }, false);
//     //get data by key
//     function getStudentByKey(){
//         let username=document.getElementById("username").value;
//         let password=document.getElementById("password").value;
    
        
//         let transaction = db.transaction(["student"],"readonly");
//         let storage = transaction.objectStore("student");
     
//         requestGet.onsuccess = function (e){
//             let result = e.target.result;
//             for(let i in result){
//                 if(username==)
               
//             }
//         }
//         requestGet.onerror = function (){
//             console.log("get data error");
//         }
//    }