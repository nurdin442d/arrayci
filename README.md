1.Logic 1
mengurutkan data array dari yang terkecil sampai ke yang terbesar disini saya menggunakan perintah sort untuk mengurutkan data serta perintah for untuk melakukan perulangan yang berfungsi untuk menampilkan semua data.

2.Logic 2
di logic ke dua ini saya mencari data yang memiliki duplikat number kemudian menuliskan ada berapa duplikat number dari setiap data yang terbaca. disini saya menggunakan perintah array count values  berfungsi untuk menghitung jumlah data yang ada didalam array. setelah data terhitung maka saya kemudian menggunakan fungsi print_r untuk menampilkan data-data array yang mempunyai duplikat number

3.Logic 3
di logic ini saya akan menampilkan semua data yang tidak duplikat, pertama saya membuat fungction terlebih dahulu dengan nama findduplicates function ini berfungsi sebagai perintah untuk mengembalikan data jika memenuhi syarat tertentu di sini saya memberi batasan. jika data dari array itu sendiri kurang dari 2 maka return(kemablikan) data tersebut. setelah itu saya membuat variabel baru lalu saya gunakan fungsi array_filter yang berguna untuk mefilter semua data yang terbaca dari function findduplicates. kemuadian saya menggunakan perintah print_r untuk menampilkan data2 yang sudah terfilter dari variabel yang saya buat. maka dia akan memfilter dan hanya menampilkan data2 yang tidak duplikat.

4.Logic 4
di logic ini saya akan mengubah semua data menjadi huruf kecil. untuk melakukan itu maka saya membuat variabel baru kemudian menggunakan perintah array_map yang di dalamanya saya beri perintah strtolower dan saya deklarasikan variabel yang ingin di ubah menajdi huruf kecil. dan untuk selanjutnya saya menggunakan perintah for untuk menampilkan semua data yang telah di ubah tersebut.

5.Logic 5
di logic ini saya akan menampilakan total data,rata2,min dan max data dari array, untuk masih-masing perintah saya berikan variabel. untuk perintahnya sendiri untuk mecari data saya menggunakan perintah array_sum, untuk mencari rata2 saya menggunakan perintah total_data/count(arr2),2. total data di dapat dari perhitungan sum sebelumnya. kemudai total_data tersebut dibagi jumlah data dari array kemudian angka 2 itu untuk membulatkan 2 angka di belakang koma. untuk mencari nilai terkecil dan terendah menggunakan perintah min dan max.

6.Logic 6
di logic 6 ini akan memfiter bilangan ganjil dan bilangan genap. di sini saya menggunakan 2 function yang sudah di buat yaitu function filterganjil dan filtergenap.setelah itu saya membaut 2 buah variabel baru yang di beri nama ganjil dan genap lalu melakukan perintah array_filter dari masing2 variabel dengan patokan dari fungction masing-masing. lalu 2 variabel tersebut saya looping menggunakan perintah for berdasarkan variabel ganjil dan genapnya.

7.logic 7
di logic ini saya akan membagi kedalam 2 huruf yaitu vokal dan konsonan. di sini saya menggunakan perintah  foreach untuk melakukan perulangan kemudian perintah if untuk memfilter 2 kategori tersebut. lalu perintah preg_match diguanakan untuk mencari data yang sama seperti yang kita tahu kalau huruf vokal itu adalah AIUEO jadi tinggal saya deklarasikan saja data yang ingin di cari adalaha AIUEO, jika batasan if itu terpenuhi maka dia masuk ke huruf vokal jika tidak masuk ke kategori huruf konsonan