var dashboard= function () {
    'use strict';
    var initialiseABI = function(){
        const stakingaddress = "0x4369dC31c2f6D65a4681b3aBdE7c053f48C0d66A";
        const StakingnmatrixAbi = [{"inputs":[{"internalType":"address","name":"_token","type":"address"}],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"user","type":"address"},{"indexed":true,"internalType":"uint256","name":"level","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"},{"indexed":true,"internalType":"address","name":"referrer","type":"address"}],"name":"LevelPurchased","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"user","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"}],"name":"RandomRewardsDistributed","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"user","type":"address"},{"indexed":true,"internalType":"address","name":"directReferrer","type":"address"}],"name":"Registration","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"uint256","name":"newFee","type":"uint256"}],"name":"RegistrationFeeChanged","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"user","type":"address"},{"indexed":true,"internalType":"address","name":"referrer","type":"address"}],"name":"RegistrationbyUser","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"user","type":"address"},{"indexed":true,"internalType":"uint256","name":"level","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"},{"indexed":true,"internalType":"address","name":"directReferrer","type":"address"}],"name":"SponsorRewardsDistributed","type":"event"},{"inputs":[{"internalType":"address","name":"userToUpgrade","type":"address"},{"internalType":"uint256","name":"_level","type":"uint256"}],"name":"Buy_Machine_Qore_For","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"RandomRewards","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"}],"name":"S10_INCOME","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"}],"name":"S4_MACHINEIncome","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"UpgradeIncome","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"changeOwner","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"checkUpdate","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"}],"name":"getDirectDownlineInfos","outputs":[{"internalType":"address[]","name":"","type":"address[]"},{"internalType":"uint256[]","name":"","type":"uint256[]"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"}],"name":"getDirectPartnersCount","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"}],"name":"getDirectReferrerReward","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"}],"name":"getIndirectReferrerOfReferrerReward","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"}],"name":"getIndirectReferrerReward","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"getLastRegistration","outputs":[{"internalType":"uint256","name":"userID","type":"uint256"},{"internalType":"address","name":"referrer","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"_user","type":"address"}],"name":"getUserCurrentLevel","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"_user","type":"address"}],"name":"getUserDirectReferrer","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"","type":"uint256"}],"name":"idToAddress","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"","type":"uint256"}],"name":"levelPrices","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"numberOfUsers","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"","type":"uint256"}],"name":"paymentsMade","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"randomUser","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"referrers","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"newUser","type":"address"},{"internalType":"address","name":"directReferrer","type":"address"}],"name":"register","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"registrationFee","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"newFee","type":"uint256"}],"name":"setRegistrationFee","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"_token","type":"address"}],"name":"setTokenContract","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"token","outputs":[{"internalType":"contract IERC20","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalContributions","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalLevels","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"totalRewards","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"transferToReferrerRewards","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"","type":"uint256"}],"name":"userAddresses","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"userCurrentLevel","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"userDirectReferrer","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"userIDs","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"userLevels","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"users","outputs":[{"internalType":"uint256","name":"id","type":"uint256"},{"internalType":"address","name":"referrer","type":"address"},{"internalType":"uint256","name":"level","type":"uint256"}],"stateMutability":"view","type":"function"},{"stateMutability":"payable","type":"receive"}]
        var balance_MAIN = "100000000000000000000000";
        return {
            'stakingaddress':stakingaddress,
            'StakingnmatrixAbi':StakingnmatrixAbi,
            'balance_MAIN':balance_MAIN,
        }
    }
    var initialiseEtheruim=async function () {

        if (window.ethereum) {
            window.web3 = new Web3(ethereum);
            try {
               var networkid = await web3.eth.net.getId()

                if (networkid !== 56) {
                    alert('Connect to BNB Mainnet Network');
                }
                else {
                    var id_user=$('#id_user_smart').text();
                }
            } catch (error) {
                $('#spinner_dashboard').hide()
                alert('Error: Out of Gas: please reload this page')
                console.log(error)
            }
        }
        else if (window.web3) {
            window.web3 = new Web3(web3.currentProvider);
            web3.eth.sendTransaction({/* ... */ });
        }
        else {
            alert('Requires ETH purse to interact smart contract You should consider trying MetaMask!');

        }
    }
    var completePreview=async function () {
        var id_user=$('#id_user_smart').text();
        window.mxgfcontract = await new window.web3.eth.Contract(initialiseABI().StakingnmatrixAbi, initialiseABI().stakingaddress);
        var adresse = await window.mxgfcontract.methods.idToAddress(Number.parseInt(id_user)).call();
        var S10_INCOME = await window.mxgfcontract.methods.S10_INCOME(adresse).call();
        var S4_MACHINEIncome = await window.mxgfcontract.methods.S4_MACHINEIncome(adresse).call();
        var randomRewards = await window.mxgfcontract.methods.RandomRewards(adresse).call();
        var getDirectReferrerReward = await window.mxgfcontract.methods.getDirectReferrerReward(adresse).call();
        var total= Number(convertDiv(S10_INCOME))+Number(convertDiv(S4_MACHINEIncome))
            +Number(convertDiv(getDirectReferrerReward))+Number(convertDiv(randomRewards));
        $('#total_earning').text(roundDecimal(total))
        $('#order_total').text(roundDecimal(total)+' USDC')
        var getUserCurrentLevel = await window.mxgfcontract.methods.getUserCurrentLevel(adresse).call();
        var getChildAddress= await window.mxgfcontract.methods.getDirectDownlineInfos(adresse).call();

        currentLevel(getUserCurrentLevel,getChildAddress[1])

    }
    /* Function ============ */
    return {
        init:function(){
            initialiseEtheruim();
            initialiseABI();
        },
        load:function(){
            initialiseEtheruim();
            completePreview();
        },
        buy_machin: async function (level) {
            const account = await getCurrentAccount();
            window.mxgfcontract = await new window.web3.eth.Contract(initialiseABI().StakingnmatrixAbi, initialiseABI().stakingaddress);
            var level_ = await window.mxgfcontract.methods.Buy_Machine_Qore_For(account, Number.parseInt(level)).send({
                from: account,
            });
            console.log(level_)
            if (level_.status === true) {
                window.location.reload()
            } else {
                alert("Echec: Buy Level error")
            }
        }
    }
}();
function convertDiv(amount) {
    if (amount>0){
        return amount/1000000000000000000;
    }
    return amount;
}
function roundDecimal(nombre, precision){
    var precision = precision || 2;
    var tmp = Math.pow(10, precision);
    return Math.round( nombre*tmp )/tmp;
}
async function getCurrentAccount() {
    const accounts = await window.web3.eth.getAccounts();
    return accounts[0];
}
async function buy_machin(level){
    const account = await getCurrentAccount();
    window.mxgfcontract = await new window.web3.eth.Contract(StakingnmatrixAbi, stakingaddress);
    var level_ = await window.mxgfcontract.methods.Buy_Machine_Qore_For(account,Number.parseInt(level)).send({
        from: account,
    });
    console.log(level_)
    if (level_.status===true){
        window.location.reload()
    }else {
        alert("Echec: Buy Level error")
    }
}
function currentLevel(level,childs) {
    const levels=[1,2,3,4,5,6,7,8,9,10]
    const levels_price=[10,20,30,40,100,200,300,500,1250,2500]
    for (const i of levels) {
        if (i<=level){
            const isactivate=childs.includes(i.toString())
            childs = childs.filter(element => element !== "0");
            let count = childs.filter(x => x === level.toString()).length
            $('#level_users').append('<div class="cas"><div class="row">' +
                '<div class="col-sm-6 col-md-6">' +
                '<img class="cas_img" src="../img/admin/1.svg"><span>'+levels_price[i-1]+'</span></div>' +
                '<div class="col-sm-6 col-md-6"><span>LVL'+i+'</span></div> ' +
                '</div><div class="container row">' +
                ' <span class="circle_level_activate rounded-circle" id="lv1_'+i+'"></span>' +
                '<span class="circle_level_activate rounded-circle" id="lv2_'+i+'"></span><span class="circle_level_activate rounded-circle" id="lv3_'+i+'"></span></div>' +
                '<div class="row "><div class="col-sm-6 col-md-6 mt-3">' +
                '<img class="cas_img" src="../img/admin/3.svg"><span style="">'+count+'</span></div>' +
                '<div class="col-sm-6 col-md-6 mt-3"></div></div></div>')

            if (isactivate===true){
                const id="#lv2_"+i
                $(id).addClass("circle_level")
                $(id).removeClass("circle_level_activate")
            }
            if (childs.length>0){
                const id1="#lv1_"+i
                $(id1).addClass("circle_level")
                $(id1).removeClass("circle_level_activate")
            }
        }else {
            $('#level_users').append('<div class="cas"><div class="row">' +
                '<div class="col-6 col-md-6">' +
                '<img class="cas_img" src="../img/admin/1.svg"><span>'+levels_price[i-1]+'</span></div>' +
                '<div class="col-6 col-md-6"><span>LVL'+i+'</span></div> ' +
                '</div><div class="d-flex justify-content-center"><a href="javascript:;" onclick="dashboard.buy_machin('+i+')"><img class="cas_img_buy" src="../img/admin/7.svg"></a> </div>' +
                '<div class="row "><div class="col-6 col-md-6 mt-3"><p><img class="cas_img" src="../img/admin/3.svg"><span style=""></span></p></div>' +
                '<div class="col-6 col-md-6 mt-3"><img class="cas_img" src="../img/admin/8.svg"></div></div></div>')
        }

    }
}
function filterAdresse(tabs) {
    childs = tabs.filter(element => element !== "0x0000000000000000000000000000000000000000");
    return childs;
}
/* Document.ready Start */
jQuery(document).ready(function() {
    'use strict';
    try {
        dashboard.init();
    }catch (e) {
        alert("it run Out of Gas")
    }


});
/* Document.ready END */

/* Window Load START */
jQuery(window).on('load',function () {
    'use strict';
    try {
        dashboard.load();
    }catch (e) {
        alert("it run Out of Gas")
    }
});
