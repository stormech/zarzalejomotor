<div>
    <style>
        #mascara-cart {
            display: inline-block;
            width: 35px;
            height: 35px;
            background: url({{asset('ico/shopping_cart_icon_124391.svg')}});
        }

        @supports (-webkit-mask: url("")) or (mask: url("")) {
            #mascara-cart {
                -webkit-mask: url({{asset('ico/shopping_cart_icon_124391.svg')}});
                mask: url({{asset('ico/shopping_cart_icon_124391.svg')}});
                mask-size: cover;
                background: white;
            }
        }
    </style>
    <div id="mascara-cart"></div>

</div>

