const Kategori = document.getElementById('Category');

Kategori.addEventListener('change', function(){
    console.log(typeof(Kategori.value));
    if(Kategori.value != '-.-'){
        pilihan = document.getElementById(Kategori.value).cloneNode(true);
        document.getElementById('pilihan').innerHTML = "";
        p = document.getElementById('pilihan').appendChild(pilihan);
        p.removeAttribute("hidden");
    }
    
    // p.appendChild
    // console.log(pilihan);
    // p.removeAttribute('hidden');
    // document.getElementById('pilihan').innerHTML = ;
});