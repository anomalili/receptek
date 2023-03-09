class ReceptView {
    constructor(elem, szuloElem) {

        szuloElem.append(`<tr class="table_row" id=${elem.id}>
            <td class="table_item" id=${elem.id}"> <p class="receptNevP">${elem.etel}</p></td>
            <td class="table_item" id=${elem.id}"> <p class="katNevP">${elem.kat}</p></td>
                 
        </tr> `);
    }
}



class ReceptekView {
    #elem;
    constructor(elem, szuloElem) {
        this.#elem = elem;
        console.log(this.#elem);

        szuloElem.append(`
        
        <select name="receptek" id="receptek">
            <option value="#">Kategóriák</option>
            
        </select>


        <div class= "receptek">
        
            <table class="table">
            <tr>
            <th>Recept</th>
            <th>Kategória</th>
            </tr>
            </table>
           <table class="table2">
            </table>
        </div>
                       
                                
         `);

        const szuloElemem = $('.table')
        if (Array.isArray(elem)) {
            this.#elem.forEach(elemem => {

                new ReceptView(elemem, szuloElemem);
            });
        }

        const szuloElemem2 = $('#receptek')
        if (Array.isArray(elem)) {
            this.#elem.forEach(elemem => {

                new Recept2View(elemem, szuloElemem2);
            });
        }
    }
}

class Recept2View {
    constructor(elem, szuloElem) {
        szuloElem.append(`<option value="${elem.kat}">${elem.kat}</option>`);
    }
}

export default ReceptekView;