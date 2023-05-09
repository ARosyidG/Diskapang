const Judul = document.querySelector('#Judul');
const Slug = document.querySelector('#Slug');
// const smallSlug = document.querySelector('#smallSlug');
Judul.addEventListener('change', function(){
    console.log('lol');
    logJSONData();
    async function logJSONData() {
        console.log("test");
        const response = await fetch('/Admin/checkSlug?Judul=' + Judul.value);
        console.log(response);
        const jsonData = await response.json();
        Slug.value = jsonData.Slug;
        document.getElementById('smallSlug').innerHTML = 'Slug : ' + Slug.value;
    }
});
document.getElementById('Publish').onclick = function(){
    let Slug = document.getElementById('Slug').value;
    fetch('/Admin/checkavailability?Slug=' + Slug);
    const date = new Date().toJSON();
    tanggal = date.slice(0,10);
    jam = date.slice(11,19);
    PublishDate = tanggal+ " " + jam
    // Publish = "{PublishDate: '"+PublishDate+"', id: '"+document.getElementById('Slug').value+"'}";
    // Publish['PublishDate']= PublishDate;
    // Publish['id']= document.getElementById('Slug').value;
    // Publish.toJSON;
    // console.log(Publish);

    fetch('/Admin/Publish/'+PublishDate+'/'+Slug);
    window.alert("Berita Berhasil Di Publish");
    window.location.href="/Admin/Berita";
    console.log('lol');
}
function Publish(){
    window.alert("Berita Berhasil Di Publish");
    document.getElementById('isPublish').value = true;
}
function imgPreview(){
    const img = document.querySelector('#Gambar');
    const imgPre = document.querySelector('#imgPre');
    const oFReader = new FileReader();
    oFReader.readAsDataURL(img.files[0]);
    // console.log(oFReader.readAsDataURL(img.files[0]));
    oFReader.onload = function(oFREvent){
        imgPre.src = oFREvent.target.result;
    }

}
