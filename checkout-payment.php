<?php
/*
Template Name: Страница Ввода платежной информации
*/
?>

<?php get_header(); ?>

<body>

  <?php include(get_template_directory() . "/include/preloader.php"); ?>

  <div data-page-layout>
    <div class="wrapper w-full min-h-screen flex flex-col" data-scroller="">
      <div class="flex-grow">
        <div class="page-holder">
          <main class="main">
            <section class="site-section relative">
              <div class="section__holder lg:pb-100">
                <div class="md:grid md:grid-cols-2 md:items-start" id="sticky-container">
                  <div class="py-40 lg:py-80 px-15 laptop:px-120">
                    <div class="text-center">
                      <a class="inline-flex mb-30" href="<?php echo home_url(); ?>/products"><svg class="max-w-full block logo-food w-130 md:w-250 h-auto mx-auto" width="564" height="112" viewbox="0 0 564 112" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M137.402 103.748C137.402 105.157 137.104 106.376 136.508 107.406C135.913 108.436 135.141 109.29 134.194 109.967C133.246 110.645 132.164 111.153 130.946 111.492C129.728 111.83 128.496 112 127.251 112C124.598 112 122.19 111.404 120.025 110.212L119.7 106.878C121.892 109.155 124.557 110.293 127.698 110.293C128.51 110.293 129.322 110.198 130.134 110.008C130.947 109.819 131.678 109.507 132.327 109.073C132.977 108.64 133.497 108.091 133.89 107.427C134.282 106.764 134.479 105.958 134.479 105.009C134.479 103.003 133.342 101.337 131.068 100.009C130.013 99.4404 128.957 98.8715 127.901 98.302C126.845 97.7332 125.776 97.1782 124.694 96.6357C122.42 95.1185 121.283 93.2351 121.283 90.9855C121.283 89.7125 121.554 88.6216 122.096 87.7136C122.637 86.8055 123.347 86.0677 124.227 85.4982C125.107 84.9287 126.095 84.5156 127.191 84.2582C128.288 84.0015 129.39 83.8728 130.5 83.8728C132.395 83.8728 134.155 84.2252 135.779 84.9294L135.941 87.9379C134.344 86.339 132.382 85.5398 130.054 85.5398C129.35 85.5398 128.639 85.6282 127.922 85.8037C127.205 85.9799 126.548 86.2505 125.954 86.6168C125.358 86.983 124.878 87.4569 124.512 88.0389C124.147 88.6223 123.964 89.3198 123.964 90.1328C123.964 91.84 125.128 93.3031 127.456 94.5226C128.538 95.0658 129.614 95.5996 130.684 96.1282C131.753 96.6568 132.828 97.192 133.911 97.7338C136.237 99.2767 137.402 101.282 137.402 103.748Z" fill="currentColor"></path>
                          <path d="M177.23 84.3585C176.987 84.8739 176.865 85.9575 176.865 87.6106V100.74C176.865 108.246 173.306 112 166.187 112C159.258 112 155.793 108.437 155.793 101.309V87.6106C155.793 85.8763 155.684 84.7928 155.468 84.3585H159.285C159.041 85.1174 158.919 86.2017 158.919 87.6106V101.675C158.919 107.42 161.368 110.293 166.268 110.293C171.952 110.293 174.794 107.353 174.794 101.472V87.6106C174.794 85.9311 174.685 84.8469 174.469 84.3585H177.23Z" fill="currentColor"></path>
                          <path d="M212.594 91.7562C212.594 92.9758 212.343 94.0732 211.843 95.0486C211.342 96.0246 210.679 96.8442 209.854 97.5081C209.028 98.1727 208.08 98.6867 207.011 99.0523C205.942 99.4186 204.839 99.6007 203.702 99.6007C202.565 99.6007 201.361 99.3843 200.089 98.9501V108.218C200.089 109.898 200.211 110.982 200.455 111.47H196.719C196.963 110.982 197.085 109.899 197.085 108.218V87.6086C197.085 86.0374 196.963 84.9538 196.719 84.3565H203.337C204.501 84.3565 205.638 84.4925 206.748 84.7631C207.857 85.0343 208.845 85.4678 209.712 86.0638C210.578 86.6597 211.275 87.4252 211.803 88.3603C212.329 89.2974 212.594 90.4291 212.594 91.7562ZM209.507 92.0004C209.507 88.0435 206.976 86.0657 201.915 86.0657H200.088V97.2441C201.306 97.7048 202.469 97.9351 203.579 97.9351C205.392 97.9351 206.833 97.3999 207.903 96.3295C208.973 95.2591 209.507 93.8159 209.507 92.0004Z" fill="currentColor"></path>
                          <path d="M247.794 111.471H230.457C230.701 110.984 230.823 109.9 230.823 108.219V87.61C230.823 86.0387 230.701 84.9551 230.457 84.3579H247.185L246.739 87.3255C245.737 86.4861 243.68 86.0657 240.567 86.0657H233.868V96.0246H241.866C243.138 96.0246 244.018 95.9164 244.505 95.6993V98.0572C243.91 97.8401 243.03 97.7318 241.866 97.7318H233.868V109.764H240.689C244.695 109.764 247.361 109.263 248.688 108.26L247.794 111.471Z" fill="currentColor"></path>
                          <path d="M280.478 111.471C279.882 110.713 278.908 109.317 277.554 107.285C276.201 105.252 274.428 102.543 272.236 99.1553H270.693C270.341 99.1824 270.036 99.1955 269.779 99.1955C269.521 99.1955 269.299 99.1955 269.109 99.1955V108.219C269.109 109.899 269.231 110.983 269.475 111.471H265.74C265.984 110.984 266.106 109.9 266.106 108.219V87.61C266.106 86.0387 265.984 84.9551 265.74 84.3579H272.439C273.63 84.3579 274.787 84.4799 275.91 84.7241C277.033 84.9683 278.035 85.3748 278.915 85.9437C279.794 86.5125 280.505 87.2648 281.047 88.1999C281.588 89.135 281.859 90.28 281.859 91.6348C281.859 92.6102 281.676 93.4984 281.311 94.2976C280.946 95.0974 280.459 95.8016 279.849 96.4107C279.24 97.0204 278.529 97.5226 277.717 97.9153C276.905 98.3086 276.038 98.5719 275.119 98.7072L277.108 101.634C278.136 103.179 279.111 104.575 280.031 105.82C280.952 107.067 281.818 108.192 282.63 109.195C283.495 110.279 284.226 111.038 284.822 111.471H280.478V111.471ZM278.813 92.0413C278.813 90.0088 278.217 88.5048 277.026 87.5294C275.835 86.5534 274.265 86.0657 272.317 86.0657H269.109V97.4877H271.018C276.214 97.4877 278.813 95.6729 278.813 92.0413Z" fill="currentColor"></path>
                          <path d="M317.099 87.3255C316.097 86.4861 314.04 86.0657 310.928 86.0657H304.432V96.0246H312.227C313.5 96.0246 314.38 95.9164 314.867 95.6993V98.0572C314.271 97.8401 313.391 97.7318 312.227 97.7318H304.432V108.219C304.432 109.899 304.554 110.983 304.798 111.471H301.062C301.306 110.984 301.428 109.9 301.428 108.219V87.61C301.428 86.0387 301.306 84.9551 301.062 84.3579H317.546L317.099 87.3255Z" fill="currentColor"></path>
                          <path d="M358.959 97.6097C358.959 101.811 357.66 105.252 355.061 107.935C352.435 110.645 349.079 112 344.992 112C341.121 112 337.982 110.754 335.573 108.26C333.164 105.768 331.96 102.502 331.96 98.4643C331.96 94.3722 333.326 90.9175 336.06 88.099C338.794 85.2804 342.11 83.8715 346.007 83.8715C349.797 83.8715 352.91 85.1583 355.345 87.7327C357.754 90.3071 358.959 93.6001 358.959 97.6097ZM355.426 97.9351C355.426 94.2224 354.492 91.2963 352.624 89.1548C350.702 86.987 348.212 85.9027 345.154 85.9027C342.176 85.9027 339.807 86.9593 338.048 89.073C336.262 91.1867 335.369 94.0191 335.369 97.5688C335.369 101.417 336.316 104.493 338.211 106.796C340.079 109.127 342.555 110.291 345.641 110.291C352.164 110.292 355.426 106.174 355.426 97.9351Z" fill="currentColor"></path>
                          <path d="M403.822 97.6097C403.822 101.811 402.522 105.252 399.924 107.935C397.298 110.645 393.942 112 389.855 112C385.985 112 382.844 110.754 380.436 108.26C378.027 105.768 376.822 102.502 376.822 98.4643C376.822 94.3722 378.189 90.9175 380.923 88.099C383.656 85.2804 386.973 83.8715 390.87 83.8715C394.66 83.8715 397.773 85.1583 400.208 87.7327C402.617 90.3071 403.822 93.6001 403.822 97.6097ZM400.289 97.9351C400.289 94.2224 399.355 91.2963 397.488 89.1548C395.566 86.987 393.076 85.9027 390.017 85.9027C387.039 85.9027 384.671 86.9593 382.912 89.073C381.125 91.1867 380.232 94.0191 380.232 97.5688C380.232 101.417 381.179 104.493 383.074 106.796C384.942 109.127 387.419 110.291 390.504 110.291C397.027 110.292 400.289 106.174 400.289 97.9351Z" fill="currentColor"></path>
                          <path d="M444.3 97.8539C444.3 99.8053 444.022 101.58 443.468 103.179C442.913 104.778 442.108 106.161 441.052 107.325C439.997 108.491 438.704 109.426 437.175 110.13C435.645 110.835 433.906 111.254 431.958 111.39C431.606 111.417 431.071 111.438 430.354 111.451C429.636 111.465 428.71 111.471 427.573 111.471H422.295C422.539 110.984 422.661 109.9 422.661 108.219V87.61C422.661 85.9575 422.539 84.8733 422.295 84.3579H429.36C431.525 84.3579 433.521 84.6291 435.349 85.1709C437.176 85.7133 438.752 86.5323 440.079 87.6298C441.404 88.7279 442.44 90.1236 443.185 91.8163C443.928 93.5116 444.3 95.5237 444.3 97.8539ZM441.011 98.1384C441.011 95.9435 440.733 94.0805 440.179 92.5495C439.624 91.0191 438.812 89.7646 437.743 88.7892C436.673 87.8139 435.333 87.1097 433.723 86.6755C432.112 86.2426 430.251 86.0248 428.14 86.0248H425.664V109.764C427.314 109.764 428.621 109.764 429.582 109.764C430.542 109.764 431.172 109.75 431.47 109.723C433.175 109.641 434.637 109.29 435.854 108.666C437.072 108.043 438.06 107.217 438.818 106.187C439.576 105.157 440.131 103.951 440.483 102.569C440.835 101.187 441.011 99.7103 441.011 98.1384Z" fill="currentColor"></path>
                          <path d="M91.8427 4.23809C77.1286 12.7498 73.7202 29.3131 81.5113 42.8316C89.3024 56.3376 105.346 61.6737 120.059 53.162C134.774 44.6636 138.182 28.087 130.391 14.5817C122.599 1.06254 106.556 -4.27358 91.8427 4.23809ZM119.164 51.6205C109.478 57.2206 96.0665 51.2648 88.7625 38.6022C81.4579 25.9264 83.0115 11.327 92.6976 5.72687C102.384 0.126773 115.795 6.08257 123.099 18.7451C130.403 31.4216 128.851 46.021 119.164 51.6205Z" fill="currentColor"></path>
                          <path d="M372.459 54.1572H353.222V9.61117C353.222 6.85666 354.802 3.03439 356.697 1.28164V0.991931H343.167V1.28164C345.063 3.03439 346.641 6.85666 346.641 9.61117V47.7784C346.641 50.5329 345.062 54.3552 343.167 56.1079V56.3976L383.215 56.397V54.1618H383.215V49.778H382.842C380.226 52.512 376.802 54.1341 372.459 54.1572Z" fill="currentColor"></path>
                          <path d="M481.878 1.00843V0.99655H461.617V1.00777H458.125V1.30473C460.026 3.05749 461.602 6.87117 461.602 9.63625V47.748C461.602 50.5138 460.026 54.3275 458.125 56.0795V56.3765H461.602V56.2043H461.617V56.3818H481.874V56.4023C498.534 56.4036 509.539 44.0037 509.539 28.7073C509.541 13.4103 498.539 1.00909 481.878 1.00843ZM481.874 54.6482V54.668H468.182V2.71103H481.878V2.69981C492.845 2.70047 501.314 14.3303 501.313 28.6756C501.311 43.0204 492.841 54.6488 481.874 54.6482Z" fill="currentColor"></path>
                          <path d="M31.784 51.3176L8.80487 0.99721H0V1.3793C2.32942 3.61908 3.85666 6.43892 4.25083 9.91737V47.7731C4.25083 50.5402 2.67152 54.3479 0.776474 56.1007V56.4036H9.96299V56.1007C8.17275 54.4535 6.67253 51.0147 6.48863 48.3004V11.7757L26.8615 56.4042H32.1788L33.074 54.1513L34.0475 51.6871L51.8807 6.71609V47.7738C51.8807 50.5408 50.3014 54.3486 48.4063 56.1013V56.4042H61.936V56.1013C60.0409 54.3486 58.4616 50.5408 58.4616 47.7738V11.8542C58.4616 7.46642 60.0937 4.01437 62.8443 1.37865V0.99721H51.7489L31.784 51.3176Z" fill="currentColor"></path>
                          <path d="M162.352 37.8862C154.626 24.499 157.272 8.31838 168.051 0.570241C167.341 0.91274 166.629 1.28164 165.932 1.69013C151.824 9.8461 146.98 27.9115 155.14 42.0496C163.286 56.1878 181.33 61.0237 195.452 52.8677C196.123 52.4856 196.768 52.0771 197.387 51.6422C185.279 57.0318 170.039 51.2206 162.352 37.8862Z" fill="currentColor"></path>
                          <path d="M250.581 1.29352C252.49 3.04627 254.056 6.85402 254.056 9.62107V50.1125L219.509 1.00381H209.204V1.37271C211.954 4.00777 213.573 7.46048 213.573 11.8608V48.2938C213.389 51.0081 211.888 54.4476 210.112 56.0941V56.397H219.298V56.1073C217.39 54.3545 215.81 50.5336 215.81 47.7797V7.19651L250.423 56.3976H256.293V9.62107C256.293 6.85402 257.872 3.04627 259.767 1.29352V1.00381H250.581V1.29352H250.581Z" fill="currentColor"></path>
                          <path d="M438.267 47.1779L421.329 0.982032H411.866V1.35093C413.984 3.38019 414.458 6.02845 413.682 9.04562L399.402 47.9546L399.126 48.732C397.678 52.5529 395.691 55.3992 393.006 56.0842V56.3739H402.18L402.167 56.0842C399.718 55.2804 400.548 51.433 401.469 48.864C401.469 48.8376 401.482 48.798 401.496 48.7716L405.843 36.9273H427.495L432.529 50.6425C433.227 52.803 432.99 54.503 431.174 56.0842L431.16 56.3871H434.635V56.3739H444.913V56.3871H445.098L445.111 56.0842C443.018 55.5714 439.267 49.6948 438.267 47.1779ZM406.693 34.613L416.67 7.39911L426.645 34.613H406.693Z" fill="currentColor"></path>
                          <path d="M553.183 3.23632C557.556 3.24424 560.997 4.87095 563.626 7.61688H563.999L563.999 0.99721H523.95V1.29417C525.851 3.04627 527.427 6.86061 527.427 9.62569V47.7751C527.427 50.5402 525.851 54.3539 523.95 56.1066V56.4036H563.999V54.1658H564V49.7832H563.627C560.997 52.5298 557.554 54.1572 553.179 54.1645H534.007V29.8186H544.997C549.113 29.9546 552.388 31.543 554.907 34.1741H555.281V23.2247H554.907C552.392 25.8512 549.124 27.4383 545.019 27.5795H534.007V3.23632H553.183Z" fill="currentColor"></path>
                          <path d="M299.612 32.0518H320.121V41.919C320.115 42.1315 320.102 42.6343 320.1 42.8356C320.076 45.241 320.005 48.9214 315.865 51.4608C315.841 51.4746 315.82 51.4924 315.797 51.5063C306.111 57.1064 292.332 50.7408 285.183 38.7005C278.026 26.6477 279.648 11.2102 289.335 5.61006C297.39 0.958935 308.957 4.42154 316.223 12.8487H326.057C317.255 -0.327912 300.889 -3.61168 288.481 4.11996C288.478 4.12128 288.476 4.1226 288.474 4.12392C273.76 12.6231 270.351 29.199 278.142 42.7175C285.933 56.2234 302.193 61.5595 316.907 53.0479C316.925 53.038 316.94 53.0261 316.957 53.0155C323.076 49.4209 326.234 44.8549 327.346 42.5287C327.41 42.3941 327.419 42.1803 327.417 42.0193H327.419V32.0518H327.429V29.8114H299.611L299.612 32.0518Z" fill="currentColor"></path>
                        </svg></a>
                    </div>
                    <div class="flex justify-center mb-40">
                      <ul class="form-steps-list">
                        <li class="form-steps-list__item"><a class="form-steps-list__link link link--underline" href="<?php echo home_url(); ?>/checkout-customer">Customer info</a></li>
                        <li class="form-steps-list__item"><a class="form-steps-list__link link link--underline" href="<?php echo home_url(); ?>/checkout-shipping">Shipping</a></li>
                        <li class="form-steps-list__item form-steps-list__item--active">
                          <a class="form-steps-list__link link link--underline" href="<?php echo home_url(); ?>/checkout-payment">Payment</a>
                        </li>
                      </ul>
                    </div>
                    <div class="hidden-form-empty-cart">
                      <!-- <form > -->


                      <form id="payment-form" name="customerinfo" class="form-theme--dark">

                        <div class="mb-45">
                          <div class="form-group">
                            <div class="form-group__control input-editable"><input name="customerShippingEmail" class="form-control" type="text" value="" placeholder="E-mail" pattern="^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)$" required readonly />
                              <p class="btn-edit">Edit</p>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="form-group__control input-editable"><input name="customerShippingAddress" class="form-control" type="text" value="" placeholder="Address" maxlength="300" required readonly />
                              <p class="btn-edit">Edit</p>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="form-group__control input-editable"><input name="customerShippingMethod" class="form-control" type="text" value="" placeholder="Shiping Method" maxlength="300" required readonly />
                              <p class="btn-edit btn-edit-shiping-method">Edit</p>
                            </div>
                          </div>
                        </div>
                        <h2 class="h5 font-serif mb-15 normal-case">Payment</h2>
                        <!-- <div class="form-group payment-selector-desktop"> -->
                        <!-- <div class="payment-selector-row">
                            <input type="radio" id="pscard" hidden name="ps">
                            <label for="pscard">Debit / Credit Card</label>
                            <input type="radio" id="psapple" hidden name="ps">
                            <label for="psapple">Apple Pay</label>
                            <input type="radio" id="psgpay" hidden name="ps">
                            <label for="psgpay">G Pay</label>
                            <input type="radio" id="pspp" hidden name="ps">
                            <label for="pspp">PayPal</label>
                          </div> -->
                        <!-- <div class="payment-selector-row-second">
                            <svg width="100" height="58" viewBox="0 0 100 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path opacity=".2" d="M97 0a3 3 0 0 1 3 3v52a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3V3a3 3 0 0 1 3-3h94Z" fill="#414141" />
                              <path d="M50.239 27.14c-.025 1.803 1.723 2.81 3.04 3.409 1.354.614 1.808 1.007 1.803 1.556-.01.84-1.08 1.212-2.08 1.226-1.746.025-2.76-.44-3.568-.791l-.629 2.744c.81.348 2.309.651 3.864.665 3.649 0 6.036-1.68 6.049-4.284.014-3.305-4.903-3.488-4.87-4.966.012-.448.47-.926 1.475-1.047.498-.062 1.87-.109 3.426.56l.61-2.655A9.908 9.908 0 0 0 56.11 23c-3.435 0-5.851 1.703-5.87 4.14Zm14.99-3.91c-.667 0-1.229.362-1.48.918l-5.212 11.605h3.647l.725-1.87h4.456l.421 1.87H71L68.195 23.23h-2.967Zm.51 3.383 1.052 4.702h-2.882l1.83-4.703Zm-19.922-3.384-2.874 12.524h3.475L49.29 23.23h-3.473Zm-5.14 0-3.617 8.525-1.463-7.248c-.171-.81-.85-1.277-1.602-1.277h-5.912l-.083.364c1.214.245 2.593.642 3.428 1.065.511.26.657.486.825 1.1l2.771 9.995h3.672l5.63-12.524h-3.649Z" fill="url(#a)" />
                              <defs>
                                <linearGradient id="a" x1="47.769" y1="36.208" x2="48.118" y2="22.909" gradientUnits="userSpaceOnUse">
                                  <stop stop-color="#5B5B5B" />
                                  <stop offset="1" stop-color="#A7A7A7" />
                                </linearGradient>
                              </defs>
                            </svg>
                            <svg width="100" height="58" viewBox="0 0 100 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path opacity=".2" d="M97 0a3 3 0 0 1 3 3v52a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3V3a3 3 0 0 1 3-3h94Z" fill="#414141" />
                              <path d="M39.18 42.866V41.08c0-.685-.408-1.132-1.107-1.132-.35 0-.73.12-.992.507-.204-.328-.495-.507-.933-.507a.935.935 0 0 0-.816.417v-.357h-.612v2.86h.612v-1.58c0-.506.262-.744.67-.744.409 0 .613.268.613.745v1.578h.612v-1.578c0-.507.292-.745.67-.745.409 0 .613.268.613.745v1.578h.67Zm9.068-2.86h-.991v-.863h-.613v.864h-.554v.566h.554v1.31c0 .655.263 1.043.962 1.043.263 0 .554-.09.759-.209l-.175-.536a.943.943 0 0 1-.525.15c-.292 0-.408-.18-.408-.478v-1.28h.99v-.566Zm5.19-.059a.819.819 0 0 0-.73.417v-.357h-.611v2.86h.612v-1.61c0-.476.204-.744.583-.744.116 0 .262.03.379.06l.175-.596c-.117-.03-.292-.03-.408-.03Zm-7.843.298c-.292-.208-.7-.298-1.137-.298-.7 0-1.166.358-1.166.924 0 .476.35.744.962.834l.291.03c.32.059.496.148.496.297 0 .209-.233.358-.642.358-.408 0-.729-.15-.933-.298l-.291.476c.32.239.758.358 1.195.358.817 0 1.283-.388 1.283-.924 0-.506-.379-.774-.962-.863l-.292-.03c-.262-.03-.466-.09-.466-.268 0-.209.204-.328.525-.328.35 0 .7.15.874.239l.263-.507Zm16.269-.298a.819.819 0 0 0-.73.417v-.357h-.611v2.86h.612v-1.61c0-.476.204-.744.583-.744.116 0 .262.03.379.06l.175-.596c-.117-.03-.292-.03-.408-.03Zm-7.814 1.49c0 .863.583 1.489 1.487 1.489.408 0 .7-.09.991-.328l-.291-.506c-.234.178-.467.268-.73.268-.495 0-.845-.358-.845-.923 0-.537.35-.894.846-.924.262 0 .495.09.729.268l.291-.506c-.291-.238-.583-.328-.991-.328-.904 0-1.487.626-1.487 1.49Zm5.656 0v-1.43h-.612v.357c-.204-.268-.496-.417-.875-.417-.787 0-1.4.626-1.4 1.49 0 .863.613 1.489 1.4 1.489.408 0 .7-.15.875-.417v.357h.612v-1.43Zm-2.245 0c0-.507.32-.924.846-.924.495 0 .845.387.845.924 0 .506-.35.923-.845.923-.525-.03-.846-.417-.846-.923Zm-7.318-1.49c-.816 0-1.4.596-1.4 1.49 0 .893.584 1.489 1.43 1.489.407 0 .816-.12 1.136-.388l-.291-.446a1.375 1.375 0 0 1-.817.298c-.379 0-.758-.18-.845-.685h2.07v-.239c.03-.923-.496-1.519-1.283-1.519Zm0 .536c.38 0 .642.239.7.685h-1.458c.058-.387.32-.685.758-.685Zm15.19.954v-2.562h-.612v1.49c-.204-.269-.496-.418-.875-.418-.787 0-1.4.626-1.4 1.49 0 .863.613 1.489 1.4 1.489.408 0 .7-.15.875-.417v.357h.612v-1.43Zm-2.245 0c0-.507.32-.924.846-.924.495 0 .845.387.845.924 0 .506-.35.923-.845.923-.525-.03-.846-.417-.846-.923Zm-20.467 0v-1.43h-.612v.357c-.205-.268-.496-.417-.875-.417-.787 0-1.4.626-1.4 1.49 0 .863.613 1.489 1.4 1.489.408 0 .7-.15.875-.417v.357h.612v-1.43Zm-2.274 0c0-.507.32-.924.845-.924.496 0 .846.387.846.924 0 .506-.35.923-.846.923-.525-.03-.845-.417-.845-.923Z" fill="#7C7C7C" />
                              <path d="M54.576 18.294h-9.184v16.858h9.184V18.294Z" fill="#A8A8A8" />
                              <path d="M45.974 26.723c0-3.426 1.575-6.464 3.995-8.43A10.293 10.293 0 0 0 43.496 16C37.694 16 33 20.795 33 26.723c0 5.927 4.694 10.722 10.496 10.722 2.45 0 4.694-.864 6.473-2.293-2.42-1.936-3.995-5.004-3.995-8.43Z" fill="#9B9B9B" />
                              <path d="M66.966 26.723c0 5.927-4.694 10.722-10.496 10.722-2.45 0-4.694-.864-6.473-2.293 2.45-1.966 3.994-5.004 3.994-8.43 0-3.425-1.574-6.463-3.994-8.429A10.293 10.293 0 0 1 56.47 16c5.802 0 10.496 4.825 10.496 10.723Z" fill="#7C7C7C" />
                            </svg>
                            <svg width="100" height="58" viewBox="0 0 100 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path opacity=".2" d="M97 0a3 3 0 0 1 3 3v52a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3V3a3 3 0 0 1 3-3h94Z" fill="#414141" />
                              <mask id="a" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="34" y="14" width="31" height="31">
                                <path d="M34 14h30.842v19.417c.076.103.13.22.158.37v.6c-.029.151-.082.283-.158.393V45H34V14Z" fill="#fff" />
                              </mask>
                              <g mask="url(#a)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M34 45h31V14H34v31Z" fill="url(#b)" />
                              </g>
                              <path fill-rule="evenodd" clip-rule="evenodd" d="m36.778 27.436-.594-1.44-.59 1.44h1.184Zm13.053-.572c-.117.067-.258.074-.428.074H48.35v-.804h1.066c.152 0 .31.006.413.061.11.056.18.168.18.322 0 .16-.068.284-.18.348Zm7.501.572-.597-1.44-.593 1.44h1.19Zm-13.983 1.562h-.887l-.006-2.832-1.254 2.832h-.76l-1.26-2.839V29H37.42l-.332-.808h-1.803l-.334.807h-.942l1.549-3.621h1.288l1.471 3.43v-3.43h1.416l1.131 2.459 1.042-2.46h1.442v3.622Zm3.536 0h-2.892v-3.621h2.892v.757H44.86v.65h1.974v.745l-1.974-.004v.724h2.024v.75Zm4.079-2.643c0 .572-.385.875-.608.964.189.073.35.198.425.306.122.177.146.342.146.66v.713h-.873l-.003-.455c0-.215.02-.53-.14-.703-.127-.13-.317-.156-.63-.156h-.93v1.314h-.866v-3.621h1.994c.44 0 .767.014 1.048.175.274.16.437.397.437.803Zm.503 2.643h.884v-3.622h-.884v3.622Zm11.131 0H61.37l-1.642-2.715.004 2.715h-1.764l-.338-.807h-1.8l-.324.807h-1.013c-.423 0-.957-.094-1.256-.399-.307-.31-.463-.724-.463-1.384 0-.537.095-1.027.467-1.415.28-.29.717-.423 1.315-.423h.836v.775h-.818c-.316 0-.496.049-.669.216-.145.153-.249.441-.249.822 0 .388.078.665.24.85.13.143.374.185.603.185h.389l1.22-2.848h1.297l1.466 3.426v-3.426h1.32l1.522 2.522v-2.522h.885v3.621ZM34 29.712h1.48l.333-.808h.747l.332.808h2.912v-.617l.26.619h1.51l.258-.626v.624h7.235l-.004-1.321h.14c.099.002.128.013.128.176v1.145h3.74v-.307c.302.162.772.307 1.388.307h1.575l.336-.808h.747l.333.808h3.03v-.766l.46.766h2.428v-5.053h-2.403v.598l-.336-.598h-2.47v.598l-.308-.598h-3.334c-.559 0-1.05.077-1.446.295v-.295h-2.298v.295c-.256-.224-.599-.295-.98-.295h-8.405l-.566 1.307-.576-1.307h-2.647v.598l-.294-.598h-2.257L34 27.06v2.653ZM64.843 32.384h-1.58c-.158 0-.263.007-.348.065-.09.058-.129.148-.129.263 0 .134.078.227.193.268.087.032.187.04.335.042l.464.012c.472.013.791.094.985.29.032.03.055.064.08.092v-1.032Zm0 2.39c-.213.308-.622.463-1.178.463h-1.672v-.778h1.667c.163 0 .28-.023.351-.09a.317.317 0 0 0 .103-.235.303.303 0 0 0-.105-.24c-.067-.057-.157-.08-.306-.083-.813-.025-1.827.026-1.827-1.12 0-.525.335-1.078 1.24-1.078h1.727v-.72H63.24c-.484 0-.835.114-1.085.297v-.298h-2.371c-.376 0-.82.095-1.034.298l.003-.298h-4.234v.298c-.337-.243-.904-.298-1.17-.298H50.56v.298c-.268-.26-.857-.298-1.22-.298h-3.126l-.714.777-.67-.777h-4.668v5.056h4.581l.738-.786.694.786 2.82.002v-1.189h.28c.371.005.816-.008 1.206-.176v1.363h2.328V34.63h.111c.144 0 .158.008.158.15v1.168h7.074c.446 0 .915-.115 1.177-.322v.322h2.245c.467 0 .92-.064 1.27-.231v-.944Zm-3.455-1.45c.17.176.259.398.259.769 0 .781-.488 1.144-1.36 1.144H58.6v-.778h1.68c.167 0 .282-.023.358-.09a.318.318 0 0 0 .1-.235.307.307 0 0 0-.107-.24c-.066-.057-.157-.08-.307-.083-.812-.025-1.823.026-1.823-1.12 0-.525.33-1.078 1.234-1.078h1.738v.771h-1.586c-.16 0-.263.007-.35.065-.093.058-.129.148-.129.263 0 .134.08.227.19.268.09.032.186.04.335.042l.467.012c.472.013.792.094.989.29Zm-7.814-.221c-.113.066-.258.073-.425.073h-1.053v-.812h1.067c.153 0 .31.003.411.063.113.06.18.172.18.329a.392.392 0 0 1-.18.346Zm.524.45c.192.07.35.198.424.304.121.177.141.343.142.661v.72h-.867v-.453c0-.22.021-.542-.14-.71-.126-.133-.32-.162-.634-.162h-.927v1.324h-.869v-3.624h1.998c.44 0 .759.018 1.042.172.274.163.443.393.443.805 0 .576-.384.871-.612.963Zm1.094-1.94h2.89v.751h-2.028v.656h1.978v.74h-1.978v.72l2.029.004v.753h-2.891v-3.624Zm-5.84 1.671H48.23v-.92h1.13c.313 0 .53.125.53.444 0 .313-.206.476-.538.476Zm-1.984 1.624-1.327-1.476 1.327-1.43v2.906Zm-3.432-.428h-2.129v-.72h1.9v-.74h-1.9v-.656h2.17l.946 1.054-.987 1.062Zm6.882-1.672c0 1.003-.748 1.213-1.507 1.213h-1.08v1.216H46.55l-1.067-1.199-1.108 1.2h-3.428v-3.625h3.481l1.066 1.187 1.1-1.187h2.767c.688 0 1.457.19 1.457 1.195Z" fill="#fff" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M50.964 26.356c0 .573-.385.874-.607.964.189.072.35.198.425.306.122.177.146.341.146.661V29h-.873l-.004-.455c0-.216.022-.53-.14-.704-.127-.13-.316-.156-.63-.156h-.93v1.314h-.866v-3.621h1.995c.439 0 .766.014 1.047.175.275.16.437.397.437.804ZM46.885 28.998h-2.893v-3.622h2.893v.758H44.86v.65h1.975v.744l-1.975-.002v.724h2.025M43.349 28.998h-.887l-.006-2.833-1.253 2.833h-.76l-1.261-2.838v2.838h-1.76l-.333-.807h-1.803l-.334.807h-.941l1.548-3.622h1.288l1.471 3.432v-3.432h1.416l1.132 2.46 1.041-2.46h1.442" fill="#7C7C7C" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M49.832 26.865c-.118.068-.259.074-.428.074h-1.052v-.804h1.066c.152 0 .31.005.412.062.111.054.18.166.18.32 0 .16-.067.285-.178.348ZM36.778 27.437l-.594-1.44-.59 1.44" fill="#fff" />
                              <defs>
                                <radialGradient id="b" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(39.149 19.385) scale(36.7413)">
                                  <stop stop-color="#9B9B9B" />
                                  <stop offset="1" stop-color="#7C7C7C" />
                                </radialGradient>
                              </defs>
                            </svg>
                          </div> -->
                        <!-- </div> -->

                        <!-- <div class="form-group payment-selector-mobile">
                          <div class="form-group__control">
                            <select id="customerSelectCreditСard" class="form-control">
                              <option value="01">Credit card (Visa, Mastercard, Amex)</option>
                              <option value="Other">Other</option>
                            </select>
                          </div>
                        </div> -->

                        <!-- <div class="form-group">
                          <div class="form-group__control"><input name="customerCardNumber" data-inputmask="'mask': '9999 9999 9999 9999'" required="required" class="form-control" type="text" placeholder="Card number" /></div>
                        </div>
                        <div class="form-group">
                          <div class="form-group__control"><input name="customerNameOnCard" data-inputmask-regex="[A-z\s ]{1,30}" class="form-control" type="text" placeholder="Name on card" required="required" /></div>
                        </div>
                        <div class="md:grid md:grid-cols-2 md:gap-x-20">
                          <div class="form-group">
                            <div class="form-group__control"><input name="customerCardExpiration" data-inputmask="'mask': '99 / 99'" class="form-control" type="tel" placeholder="Expiration (MM / YY)" required="required" /></div>
                          </div>
                          <div class="form-group">
                            <div class="form-group__control"><input name="customerCardSecurityCode" data-inputmask="'mask': '999'" class="form-control" type="tel" placeholder="Security code" required="required" /></div>
                          </div>
                        </div> -->

                        <div id="paypal-button-container" style="margin-bottom: 25px; margin-top: 20px;">
                          <!--PayPal.js injects the PayPal Button-->
                        </div>

                        <div id="payment-element">
                          <!--Stripe.js injects the Payment Element-->
                        </div>



                        <div class="md:flex md:justify-between md:items-center pt-20">
                          <div class="mb-40 md:mb-0">
                            <div class="custom-control custom-checkbox">
                              <input class="custom-control__input remember-me-checkbox" type="checkbox" id="remember_me" /><label class="custom-control__label" for="remember_me">Remember me</label>
                            </div>
                          </div>
                          <button id="submit" class="btn btn--light button-wide-mobile js-btn-paynow">
                            <div class="spinner hidden" id="spinner"></div>
                            <span id="button-text" class="btn__text-holder"><span class="btn__text js-btn-paynow">Pay now</span></span>
                          </button>

                          <!-- <button id="submit" class="btn btn--light button-wide-mobile js-btn-paynow">
                            <div class="spinner hidden" id="spinner"></div>
                            <span id="button-text">Pay now</span>
                          </button> -->

                        </div>

                        <div id="payment-message" class="hidden"></div>
                      </form>

                      <!-- </form> -->
                    </div>
                  </div>
                  <div class="fixed bottom-0 right-0 w-full md:static" data-component="checkout-products" data-scroll="" data-scroll-sticky="" data-scroll-target="#sticky-container">
                    <div class="w-full text-black bg-white pb-80 md:pb-0" data-products="">
                      <div class="overflow-y-auto md:overflow-visible max-h-full h-full" data-scroller="">

                        <div class="px-15 md:px-30 laptop:px-50 border-b border-black-100 js-cart">
                          <!-- товар тут -->
                        </div>
                        <div class="px-15 md:px-30 laptop:px-50 py-25 lg:py-30 border-b border-black-100">

                          <div class="flex-grow flex items-center cart-popup__body js-cart-is-empty-plug">
                          </div>

                          <div class="mb-25 flex justify-between items-center p-15 lg:p-20 rounded-md lg:rounded-2xl bg-black-50">
                            <span class="activated-discount uppercase mr-10 text-sm lg:text-md">superfood</span><span class="w-20 h-20 rounded-full text-white bg-black-200 inline-flex items-center justify-center"><svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.41782 5.93809C3.34481 6.01521 3.21855 6.0211 3.13724 5.95115L0.063382 3.3067C-0.0179317 3.23675 -0.0214671 3.11906 0.0554389 3.04515L1.03479 2.1045C1.11174 2.03059 1.24122 2.02738 1.32253 2.09728L3.00165 3.54175C3.08297 3.61169 3.20923 3.60581 3.28223 3.52868L6.56265 0.0641111C6.63566 -0.0130139 6.76486 -0.0218198 6.84966 0.0445795L7.92947 0.889365C8.01432 0.955723 8.024 1.07316 7.95096 1.15029L3.41782 5.93809Z" fill="currentColor" />
                              </svg></span>
                          </div>
                          <div class="flex justify-between items-baseline text-sm lg:text-md"><span>Subtotal:</span><span class="js-cart-subtotal-price">$ 0</span></div>
                          <div class="flex justify-between items-baseline text-sm lg:text-md mt-10"><span>Shipping:</span>
                            <span class="js-delivery-sum">$ 0</span>
                          </div>
                          <div class="discount-code-div flex justify-between items-baseline text-sm lg:text-md mt-10"><span>Discount code:</span><span class="js-discount-sum">$ 0</span></div>
                        </div>
                      </div>
                    </div>
                    <div class="bg-white text-black rounded-t-2xl md:rounded-none p-15 md:p-30 laptop:px-50 laptop:py-45 uppercase leading-none" data-toggle="">
                      <div class="grid grid-cols-3 items-center md:items-baseline text-lg lg:text-2xl">
                        <span>total:</span>
                        <div class="text-center">
                          <span class="md:invisible md:pointer-events-none"><span class="checkout-summary__toggler w-30 h-30 rounded-full inline-flex items-center justify-center"><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 -3.49691e-07L0.535899 4.5L7.4641 4.5L4 -3.49691e-07Z" fill="currentColor" />
                              </svg></span></span>
                        </div>
                        <span class="text-right js-cart-total-price">$ 0</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </main>
        </div>
      </div>
      <?php include(get_template_directory() . "/include/block-footer.php"); ?>
    </div>
  </div>


  <?php get_footer(); ?>