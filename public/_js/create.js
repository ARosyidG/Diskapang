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
    console.log('lol');
}

