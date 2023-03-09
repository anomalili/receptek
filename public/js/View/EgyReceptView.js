class EgyReceptView {
    constructor(elem, szuloElem) {

        szuloElem.append(`<tr>
            <td class="table_item" id=${elem.id}"> <p class="receptNevP">${elem.etel}</p></td>
            <td class="table_item" id=${elem.id}"> <p class="katNevP">${elem.kat}</p></td>
            <td class="table_item" id=${elem.id}"> <p class="leirasP">${elem.leiras}</p></td>
            <td class="table_item" id=${elem.id}"> <img src="${elem.kep_eleresi_ut}"></td>       
        </tr> `);
    }
}



class EgyReceptekView {
    #elem;
    constructor(elem, szuloElem) {
        this.#elem = elem;
        console.log(this.#elem);

        szuloElem.append(`
        
        <select name="receptek" id="receptek">
            <option value="#">Kategóriák</option>
            <option value="${elem.kat}">${elem.kat}</option>
        </select>


        <div class= "receptek">
        
            <table class="table">
            <tr>
            <th>Recept</th>
            <th>Kategória</th>
            <th>Leírás</th>
            <th>Kép</th>
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
    }
}

export default EgyReceptekView;