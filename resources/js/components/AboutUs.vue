<script>
export default {
  props:['company']
}
</script>
<template>
  <div
    class="section-full p-t50 p-b50 overlay-wraper bg-parallax clouds1 bg-repeat"
    data-stellar-background-ratio="0.5"
    style="background-image: url(assets/images/background/bg-9.jpg)"
  >
    <div class="overlay-main bg-secondry opacity-05"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="awesome-counter text-left text-white">
            <h3 class="font-24">{{ company }} Market Data</h3>
            <!--<h2 class="font-60 font-weight-600"><span class="text-primary"> MORE ABOUT US1</span>-->

            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
              <div class="tradingview-widget-container__widget">
                <iframe
                  scrolling="no"
                  allowtransparency="true"
                  frameborder="0"
                  src="https://s.tradingview.com/embed-widget/market-overview/?locale=en&amp;page-uri=https%3A%2F%2Falliedeurocryptocompany.com%2F#%7B%22colorTheme%22%3A%22dark%22%2C%22dateRange%22%3A%2212M%22%2C%22showChart%22%3Atrue%2C%22largeChartUrl%22%3A%22%22%2C%22isTransparent%22%3Afalse%2C%22showSymbolLogo%22%3Atrue%2C%22width%22%3A%22500%22%2C%22height%22%3A%22660%22%2C%22plotLineColorGrowing%22%3A%22rgba(25%2C%20118%2C%20210%2C%201)%22%2C%22plotLineColorFalling%22%3A%22rgba(25%2C%20118%2C%20210%2C%201)%22%2C%22gridLineColor%22%3A%22rgba(42%2C%2046%2C%2057%2C%201)%22%2C%22scaleFontColor%22%3A%22rgba(120%2C%20123%2C%20134%2C%201)%22%2C%22belowLineFillColorGrowing%22%3A%22rgba(33%2C%20150%2C%20243%2C%200.12)%22%2C%22belowLineFillColorFalling%22%3A%22rgba(33%2C%20150%2C%20243%2C%200.12)%22%2C%22symbolActiveColor%22%3A%22rgba(33%2C%20150%2C%20243%2C%200.12)%22%2C%22tabs%22%3A%5B%7B%22title%22%3A%22Indices%22%2C%22symbols%22%3A%5B%7B%22s%22%3A%22FOREXCOM%3ASPXUSD%22%2C%22d%22%3A%22S%26P%20500%22%7D%2C%7B%22s%22%3A%22FOREXCOM%3ANSXUSD%22%2C%22d%22%3A%22Nasdaq%20100%22%7D%2C%7B%22s%22%3A%22FOREXCOM%3ADJI%22%2C%22d%22%3A%22Dow%2030%22%7D%2C%7B%22s%22%3A%22INDEX%3ANKY%22%2C%22d%22%3A%22Nikkei%20225%22%7D%2C%7B%22s%22%3A%22INDEX%3ADEU30%22%2C%22d%22%3A%22DAX%20Index%22%7D%2C%7B%22s%22%3A%22FOREXCOM%3AUKXGBP%22%2C%22d%22%3A%22UK%20100%22%7D%5D%2C%22originalTitle%22%3A%22Indices%22%7D%2C%7B%22title%22%3A%22Commodities%22%2C%22symbols%22%3A%5B%7B%22s%22%3A%22CME_MINI%3AES1!%22%2C%22d%22%3A%22S%26P%20500%22%7D%2C%7B%22s%22%3A%22CME%3A6E1!%22%2C%22d%22%3A%22Euro%22%7D%2C%7B%22s%22%3A%22COMEX%3AGC1!%22%2C%22d%22%3A%22Gold%22%7D%2C%7B%22s%22%3A%22NYMEX%3ACL1!%22%2C%22d%22%3A%22Crude%20Oil%22%7D%2C%7B%22s%22%3A%22NYMEX%3ANG1!%22%2C%22d%22%3A%22Natural%20Gas%22%7D%2C%7B%22s%22%3A%22CBOT%3AZC1!%22%2C%22d%22%3A%22Corn%22%7D%5D%2C%22originalTitle%22%3A%22Commodities%22%7D%2C%7B%22title%22%3A%22Bonds%22%2C%22symbols%22%3A%5B%7B%22s%22%3A%22CME%3AGE1!%22%2C%22d%22%3A%22Eurodollar%22%7D%2C%7B%22s%22%3A%22CBOT%3AZB1!%22%2C%22d%22%3A%22T-Bond%22%7D%2C%7B%22s%22%3A%22CBOT%3AUB1!%22%2C%22d%22%3A%22Ultra%20T-Bond%22%7D%2C%7B%22s%22%3A%22EUREX%3AFGBL1!%22%2C%22d%22%3A%22Euro%20Bund%22%7D%2C%7B%22s%22%3A%22EUREX%3AFBTP1!%22%2C%22d%22%3A%22Euro%20BTP%22%7D%2C%7B%22s%22%3A%22EUREX%3AFGBM1!%22%2C%22d%22%3A%22Euro%20BOBL%22%7D%5D%2C%22originalTitle%22%3A%22Bonds%22%7D%2C%7B%22title%22%3A%22Forex%22%2C%22symbols%22%3A%5B%7B%22s%22%3A%22FX%3AEURUSD%22%7D%2C%7B%22s%22%3A%22FX%3AGBPUSD%22%7D%2C%7B%22s%22%3A%22FX%3AUSDJPY%22%7D%2C%7B%22s%22%3A%22FX%3AUSDCHF%22%7D%2C%7B%22s%22%3A%22FX%3AAUDUSD%22%7D%2C%7B%22s%22%3A%22FX%3AUSDCAD%22%7D%5D%2C%22originalTitle%22%3A%22Forex%22%7D%5D%2C%22utm_source%22%3A%22alliedeurocryptocompany.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22market-overview%22%7D"
                  style="
                    box-sizing: border-box;
                    height: calc(628px);
                    width: 100%;
                  "
                ></iframe>
              </div>
              <div class="tradingview-widget-copyright">
                <a
                  href="https://www.tradingview.com/markets/"
                  rel="noopener"
                  target="_blank"
                  ><span class="blue-text">Financial Markets</span></a
                >
                by {{ company }}
              </div>
            </div>
            <!-- TradingView Widget END -->
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="awesome-counter text-right text-white">
            <h3 class="font-24">{{ company }}</h3>
            <h2 class="font-60 font-weight-600">
              <span class="text-primary"> MORE ABOUT US</span>
            </h2>
            <p>
              With our all New strategy on bitcoin and forex trades, we make up
              to 98% daily wins, we also have a bitcoin mining team working with
              our platform. We generate a profit of 3BTC daily which equals
              $47,686 in today's market. Our company is registered, fully
              licensed and Insured, your initial capital invest is 100% insured
            </p>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="status-marks text-white m-tb10">
                <div class="status-value text-right">
                  <span class="counter">2,000,158</span>
                  <i class="fa fa-users font-26 m-l15"></i>
                </div>
                <h6 class="text-uppercase text-right">ACTIVE INVESTORS</h6>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="status-marks text-white m-tb10">
                <div class="status-value text-right">
                  <i class="fa fa-3x">$</i
                  ><span class="counter">2,748,753</span>
                  <i class="fa fa-building font-26 m-l15"></i>
                </div>
                <h6 class="text-uppercase text-white text-right">
                  TOTAL DEPOSITS
                </h6>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="status-marks text-white m-tb10">
                <div class="status-value text-right">
                  <i class="fa fa-3x">$</i
                  ><span class="counter">7,144,430</span>
                  <i class="fa fa-user-plus font-26 m-l15"></i>
                </div>
                <h6 class="text-uppercase text-white text-right">
                  TOTAL WITHDRAWN
                </h6>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="status-marks text-white m-tb10">
                <div class="status-value text-right">
                  <i class="fa fa-3x"></i><span class="counter">2356</span>
                  <i class="fa fa-user-plus font-26 m-l15"></i>
                </div>
                <h6 class="text-uppercase text-white text-right">
                  DAYS ONLINE
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<style scoped>
@import "../assets/ebuka.css";
@import "../assets/css/style37913791.css";
@import "../assets/css/skin/skin-25b275b27.css";
@import "../assets/plugins/pace/pace.css";
@import "../assets/plugins/revolution/revolution/css/settings.css";
@import "../assets/plugins/revolution/revolution/css/navigation.css";


</style>
