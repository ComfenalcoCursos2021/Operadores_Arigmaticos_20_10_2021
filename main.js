addEventListener("DOMContentLoaded", async()=>{
    let peticion = await fetch("https://pruebacofenalco.000webhostapp.com/Operadores_Arigmaticos_20_10_2021/api.php");
    let json = await peticion.json();
    let fragmen = new DocumentFragment();
    fragmen.append(document.querySelector("P"));
    for(let [id, value] of Object.entries(json)){
        let br = document.createElement("BR");
        let strong = document.createElement("STRONG");
        strong.insertAdjacentText("beforeend", `${id}: `);
        let mark = document.createElement("MARK");
        mark.insertAdjacentText("beforeend", value);
        fragmen.children[0].append(strong, mark, br);
    }
    document.body.appendChild(fragmen);
})