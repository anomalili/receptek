import Aszinkron from "../aszinkron";

class SortReceptek {
    constructor() {

        const token = $('meta[name="csrf-token"]').attr("content");
        const aszinkron = new Aszinkron(token);
        const selected = document.getElementById('receptek');

        selected.addEventListener('change', function() {
            console.log(selected);
            let vegpont = "sort/leves";
            const selectedOption = this.value;
            aszinkron.adatBe(vegpont, this.megjelenit);
            
        });
    }
    megjelenit() {
        console.log(adat);
        $(".receptekHelye").html("");
        new ReceptekView(adat, $(".receptekHelye") );
    }
}
  
  
  
  
  
  