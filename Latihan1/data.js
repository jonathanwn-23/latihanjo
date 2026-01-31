const nama = "Jonathan Winner";
let usia = 19;
function generateBiodata( ) {
     if (usia > 10 && usia < 18) {
    console.log('anda remaja');
  }
  else if (usia > 18 && usia < 30) {
    console.log('anda dewasa');
  }
  else if (usia > 30) {
    console.log('ah lu mah tua bro 😂');
  }
  else {
    console.log('wah elu jenis orang yang mana ya gue bingung 😂');
  }
}
//Buat manggil biodata
//generateBiodata();
//console.log (`nama saya adalah ${nama} dan usia saya ${usia} tahun`);