var shoppingCartId = "cart";
var localS = {
store: function (object) {
var strg = JSON.stringify(object); localStorage.setItem(shoppingCartId, strg); return true;
},
ginfo: function () {
return JSON.parse(localStorage.getItem(shoppingCartId));
},
reset: function () {

        localStorage.removeItem(shoppingCartId);

    }

};

var save = {
store: function (object) {
var strg = JSON.stringify(object);

},
 ginfo: function () {
     return JSON.parse(data);
 },
reset: function () {
}

};

var storage = localS; 
var helpers = {
requestH: function (id) {

    return document.getElementById(id).innerHTML;

    },
    set: function (id, html) {

        document.getElementById(id).innerHTML = html;
        return true;

    },
    productinfo: function (object) {

        var amount = object.querySelector(".amount"),
            patt = new RegExp("^[1-9]([0-9]+)?$");
        amount.value = (patt.test(amount.value) === true) ? parseInt(amount.value) : 1;

        var item = {

            name: object.getAttribute('name'),
            costs: object.getAttribute('costs'),
            id: object.getAttribute('id'),
            amount: amount.value,
            cost: parseInt(object.getAttribute('costs')) * parseInt(amount.value)

        };
        return item;

    },
    updateView: function () {

        var items = cart.getItems(),
            template = this.requestH('cartT'),
            compiled = _.template(template, {
                items: items
            });
        this.set('products', compiled);

        this.updateTotal();

    },
    emptyCart: function () {

        this.set('products', '<p>EMPTY</p>');
        this.updateTotal();

    },
    updateTotal: function () {

    this.set('total', cart.cost + '$');

    }

};

var cart = {
amount: 0, cost: 0, items: [],
    getItems: function () {

        return this.items;

    },
    setItems: function (items) {

        this.items = items;
        for (var i = 0; i < this.items.length; i++) {
            var _item = this.items[i];
            this.cost += _item.cost;
        }

    },
    clearItems: function () {

        this.items = [];
        this.cost = 0;
        storage.reset();
        helpers.emptyCart();

    },
    addItem: function (item) {

        if (this.containsItem(item.id) === false) {

            this.items.push({
                id: item.id,
                name: item.name,
                costs: item.costs,
                amount: item.amount,
                cost: item.costs * item.amount
            });

            storage.store(this.items);


        } else {

            this.updateItem(item);

        }
        this.cost += item.costs * item.amount;
        this.amount += item.amount;
        helpers.updateView();

    },
    containsItem: function (id) {

        if (this.items === undefined) {
            return false;
        }
        for (var i = 0; i < this.items.length; i++) {
            var _item = this.items[i];
            if (id == _item.id) {
                return true;
            }
        }
        return false;
    },
    updateItem: function (object) {

        for (var i = 0; i < this.items.length; i++) {
            var _item = this.items[i];
            if (object.id === _item.id) {

        _item.amount = parseInt(object.amount) + parseInt(_item.amount); _item.cost = parseInt(object.cost) + parseInt(_item.cost);
         this.items[i] = _item; storage.store(this.items);

            }

        }

    }

};

document.addEventListener('DOMContentLoaded', function () {

    if (storage.ginfo()) {

        cart.setItems(storage.ginfo());
        helpers.updateView();

    } else {

        helpers.emptyCart();


    }

    var card = document.querySelectorAll('.card button');

    [].forEach.call(card, function (card) {

        card.addEventListener('click', function (e) {

            var item = helpers.productinfo(this.parentNode);
            cart.addItem(item);


        });

    });

    document.querySelector('#clear').addEventListener('click', function (e) {

        cart.clearItems();

    });


});