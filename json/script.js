//kondisi Object jadi JSON

// let mahasiswa = {
//     nama: "Rio Fachrudin",
//     nrp: "181132123",
//     email: "riofchrdn@gmail.com"
// }
// console.log(JSON.stringify(mahasiswa));


//kondisi JSON jadi Object
// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//         let mahasiswa = JSON.parse(this.responseText);
//         console.log(mahasiswa);
//     }
// }
// xhr.open('GET', 'coba.json', true);
// xhr.send();


//JSON menggunakan JQuery
$.getJSON('coba.json', function (data) {
    console.log(data);
});