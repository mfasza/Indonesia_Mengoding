// Soal 1
var daftarBuah = ["2. Apel", "5. Jeruk", "3. Anggur", "4. Semangka", "1. Mangga"];
daftarBuah.sort();
daftarBuah.forEach(buah => {
    console.log(buah);
});


// Soal 2
var kalimat="saya sangat senang belajar javascript";
var arrayKalimat = kalimat.split(" ");
console.log(arrayKalimat);

// Soal 3
function buah(nama, warna, biji, harga) {
    this.nama = nama;
    this.warna = warna;
    this.ada_biji = biji;
    this.harga = harga;
}

var daftarBuah = [
    new buah('strawberry','merah', 'tidak', '9000'),
    new buah('jeruk','oranye', 'ada', '8000'),
    new buah('semangka','hijau & merah', 'ada', '10000'),
    new buah('pisang','kuning', 'tidak', '5000'),
]

console.log(daftarBuah[0]);