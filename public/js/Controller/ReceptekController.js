import Aszinkron from "../aszinkron.js";
import ReceptekView from "../view/ReceptView.js";

class ReceptekController{
    constructor(){

      

        const token = $('meta[name="csrf-token"]').attr("content");
        const aszinkron = new Aszinkron(token);

        $(".receptekGomb").on("click", () => {
            let vegpont = "recept/all";
            console.log("controller")
            aszinkron.adatBe(vegpont, this.megjelenit);

        });
        

    }
    megjelenit(adat) {
        console.log(adat);
        $(".receptekHelye").html("");
        new ReceptekView(adat, $(".receptekHelye") );
}
}

export default ReceptekController;