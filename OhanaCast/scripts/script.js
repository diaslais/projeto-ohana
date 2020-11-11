//esse código estava sendo utlizado para interagir com o banco de dados
function render(doc){
    
    let text = document.createElement('text');

    text.textContent = doc.data().text;

    document.getElementById('post1').innerHTML = text.textContent;
    
}

db.collection('posts').get().then((snapshot) => {
    snapshot.docs.forEach(doc => {
        render(doc);
    })
})


var storage = firebase.app().storage("gs://ohana-7c16f.appspot.com");

storage.ref('/path/to/ref').getDownloadURL().then((result) => { 
    console.log(result);
});
/*
firebase.storage().ref('/path/to/ref').getDownloadURL().then((result) => { 
    console.log(result);
});
*/