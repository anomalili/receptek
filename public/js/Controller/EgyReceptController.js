import Aszinkron from "../aszinkron.js";
import EgyReceptView from "../view/EgyReceptView.js";

class Receptcontroller {
    constructor() {

        const token = $('meta[name="csrf-token"]').attr("content");
        const aszinkron = new Aszinkron(token);
        const tableItem = document.querySelector(`.table_item`);

        tableItem.addEventListener("click", () => {
            let vegpont = "recept/show/1";
            console.log("controller")
            aszinkron.adatBe(vegpont, this.megjelenit);
        })

        /* $(".table_row").on("click", () => {

            let vegpont = "recept/show/1";
            console.log("controller")
            aszinkron.adatBe(vegpont, this.megjelenit);

        }); */
    }

    megjelenit() {
        //$(".receptekHelye").html("");
        new EgyReceptView(adat, $(".receptekHelye") );
    }
}

export default Receptcontroller;

