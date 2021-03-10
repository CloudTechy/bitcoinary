<template>
	<div class="cureency-section">
            <div class="container">
                <div class="row mb-none-30">
                    <div class="col-lg-3 col-sm-6 cureency-item mb-30">
                        <div class="cureency-card text-center">
                            <h6 class="cureency-card__title text-white">BITCOIN PRICE</h6>
                            <span class="cureency-card__amount h-font-family font-weight-600 base--color">{{$root.normalNumeral(usd_btc_rate) }} USD</span>
                        </div>
                        <!-- cureency-card end -->
                    </div>
                    <!-- cureency-item end -->
                    <div class="col-lg-3 col-sm-6 cureency-item mb-30">
                        <div class="cureency-card text-center">
                            <h6 class="cureency-card__title text-white">BITCOIN PRICE</h6>
                            <span class="cureency-card__amount h-font-family font-weight-600 base--color">{{$root.normalNumeral(eur_btc_rate) }} EUR</span>
                        </div>
                        <!-- cureency-card end -->
                    </div>
                    <!-- cureency-item end -->
                    <div class="col-lg-3 col-sm-6 cureency-item mb-30">
                        <div class="cureency-card text-center">
                            <h6 class="cureency-card__title text-white">24HRS VOLUME</h6>
                            <span class="cureency-card__amount h-font-family font-weight-600 base--color">{{$root.normalNumeral(btc_volume) }} BTC</span>
                        </div>
                        <!-- cureency-card end -->
                    </div>
                    <!-- cureency-item end -->
                    <div class="col-lg-3 col-sm-6 cureency-item mb-30">
                        <div class="cureency-card text-center">
                            <h6 class="cureency-card__title text-white">ACTIVE TRADES</h6>
                            <span class="cureency-card__amount h-font-family font-weight-600 base--color">{{ $root.normalNumeral(active_trade) }}</span>
                        </div>
                        <!-- cureency-card end -->
                    </div>
                    <!-- cureency-item end -->
                </div>
            </div>
        </div>
</template>
<script>
    export default {
    data() {
        return {
            usd_btc_rate: '-',
            eur_btc_rate: '-',
            btc_volume: '-',
            active_trade: '-',
        }

    },
    watch: {},
    computed: {
        

    },
    created() {
    	setInterval(this.btcRate, 45000)
        setInterval(this.btcVolume, 60000)
        this.btcRate()
        this.btcVolume()
    },
    props: [],
    // components: { Menu },
    methods: {
         btcRate() {
            this.$http.get("https://api.coindesk.com/v1/bpi/currentprice.json")
                .then(response => {
                    this.usd_btc_rate = response.data.bpi.USD.rate
                    this.eur_btc_rate = response.data.bpi.EUR.rate
                })
                .catch(error => {
                    console.log(error.response)
                })


        },
        btcVolume() {
            this.$http.get("https://api.binance.com/api/v3/ticker/24hr?symbol=BTCUSDT")
                .then(response => {
                    let volume = response.data.volume
                    this.btc_volume = parseInt(volume) / 3
                    this.active_trade = volume
                    // console.log(response.data);
                })
                .catch(error => {
                    console.log(error.response)
                })


        },

    },

}

</script>
<style type="text/css">

</style>