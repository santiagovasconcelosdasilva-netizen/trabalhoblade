<a href="/produto" style="text-decoration:none; color:black;">
<div style="border:1px solid #ddd; border-radius:10px; padding:15px; width:220px; background:white; transition:0.3s;"
onmouseover="this.style.transform='scale(1.05)'"
onmouseout="this.style.transform='scale(1)'">

    <img src="{{ $imagem }}" 
    style="width:100%; height:180px; object-fit:cover; border-radius:10px;">

    <h3 style="font-size:16px;">{{ $nome }}</h3>

    <p style="color:blue; font-weight:bold;">{{ $preco }}</p>

    <button style="background:blue; color:white; border:none; padding:10px; width:100%; border-radius:5px;">
        Comprar
    </button>

</div>
</a>