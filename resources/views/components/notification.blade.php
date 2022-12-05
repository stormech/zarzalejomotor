
<div>
    <style>
        #mascara-notification {
            display: inline-block;           
            width: 35px;
            height: 35px;
            background: url({{asset('ico/alarm_alert_attention_bell_clock_notification_ring_icon_123203.svg')}});
        }

        @supports (-webkit-mask: url("")) or (mask: url("")) {
            #mascara-notification {
                -webkit-mask: url({{asset('ico/alarm_alert_attention_bell_clock_notification_ring_icon_123203.svg')}});
                mask: url({{asset('ico/alarm_alert_attention_bell_clock_notification_ring_icon_123203.svg')}});
                mask-size: cover;
                background: white;
            }
        }
    </style>
    <div id="mascara-notification"></div>
</div>
