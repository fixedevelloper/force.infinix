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
    var completeDashboard=async function () {
        var id_user=$('#id_user_smart').text();
        window.mxgfcontract = await new window.web3.eth.Contract(initialiseABI().StakingnmatrixAbi, initialiseABI().stakingaddress);
        var adresse = await window.mxgfcontract.methods.idToAddress(Number.parseInt(id_user)).call();
        $('#address_user_smart').text(adresse)
        var newJoined = await window.mxgfcontract.methods.getLastRegistration().call();
        $('#newJoined').text("ID: "+newJoined.userID)
        var patners = await window.mxgfcontract.methods.getDirectPartnersCount(adresse).call();
        $('#dash_partners').text(patners)
        var getDirectReferrerReward = await window.mxgfcontract.methods.getDirectReferrerReward(adresse).call();
       var getUserDirectReferrer = await window.mxgfcontract.methods.getUserDirectReferrer(adresse).call();
        var parent = await window.mxgfcontract.methods.userIDs(getUserDirectReferrer).call();
        $('#parent_id').text(parent)
        var S10_INCOME = await window.mxgfcontract.methods.S10_INCOME(adresse).call();
        $('#S10_INCOME').text(roundDecimal(convertDiv(S10_INCOME)))
        var S4_MACHINEIncome = await window.mxgfcontract.methods.S4_MACHINEIncome(adresse).call();
        var randomRewards = await window.mxgfcontract.methods.RandomRewards(adresse).call();
        $('#getDirectReferrerReward')
            .text(roundDecimal(convertDiv(getDirectReferrerReward)))
        $('#S4_MACHINEIncome').text(roundDecimal(convertDiv(S4_MACHINEIncome)))
        $('#randomRewards').text(roundDecimal(convertDiv(randomRewards)))
        var total= Number(convertDiv(S10_INCOME))+Number(convertDiv(S4_MACHINEIncome))+Number(convertDiv(getDirectReferrerReward))+Number(convertDiv(randomRewards));
        $('#total_earning').text(roundDecimal(total))
        $('#order_total').text(roundDecimal(total)+' USDC')
        var getUserCurrentLevel = await window.mxgfcontract.methods.getUserCurrentLevel(adresse).call();
        currentLevelGrandiant(getUserCurrentLevel)
        $('.loader').show()
        let part= await calculateTotalTeam(adresse,initialiseABI().StakingnmatrixAbi,initialiseABI().stakingaddress)
        console.log(part)
        $('#direct_partners').text(part)
        $('.loader').hide()

    }

    /* Function ============ */
    return {
        init:function(){
            initialiseEtheruim();
            initialiseABI();
        },

        load:function(){
            initialiseEtheruim();
            completeDashboard();
        },
        copyText:function () {
            console.log($('#click_item').text())
        }
    }
}();

function currentLevelGrandiant(level) {
    const levels=[1,2,3,4,5,6,7,8,9,10]
    for (const i of levels) {
        if (i<=level){
            $('#level_gradian').append('<div class="x_m bg-blue col-xs-2 col-md-3 col-sm-4 col-xl-3 m-1"></div>')
        }else {
            $('#level_gradian').append('<div class="x_m bg-gray600 col-xs-2 col-md-3 col-sm-4 col-xl-3 m-1"></div>')
        }

    }
    $('#spinner_dashboard').hide()
}
function roundDecimal(nombre, precision){
    var precision = precision || 2;
    var tmp = Math.pow(10, precision);
    return Math.round( nombre*tmp )/tmp;
}
function convertDiv(amount) {
    if (amount>0){
        return amount/1000000000000000000;
    }
    return amount;
}
async function calculateTotalTeam( userAddress,StakingnmatrixAbi,stakingaddress, visited = new Set()) {
    window.mxgfcontract = await new window.web3.eth.Contract(StakingnmatrixAbi, stakingaddress);
    if (visited.has(userAddress)) {
        return 0;
    }

    visited.add(userAddress);
    let totalCount =Number.parseInt( await window.mxgfcontract.methods.getDirectPartnersCount(userAddress).call());

    // Supposons que vous ayez une fonction pour obtenir les adresses des partenaires directs
    // const partnersAddresses = await getDirectPartnersAddresses(contract, userAddress);
    const partnersAddresses =  await window.mxgfcontract.methods.getDirectDownlineInfos(userAddress).call();
    for (const partnerAddress of filterAdresse(partnersAddresses[0])) {
        totalCount += Number.parseInt(await calculateTotalTeam( partnerAddress,StakingnmatrixAbi,stakingaddress, visited)) ;
    }

    return totalCount;
}
function filterAdresse(tabs) {
    childs = tabs.filter(element => element !== "0x0000000000000000000000000000000000000000");
    return childs;
}
/* Document.ready Start */
jQuery(document).ready(function() {
    'use strict';
    dashboard.init();


});
/* Document.ready END */

/* Window Load START */
jQuery(window).on('load',function () {
    'use strict';
    dashboard.load();

});
const click_item = document.getElementById("click_item");

click_item.onclick = function() {
    document.execCommand("copy");
}

click_item.addEventListener("copy", function(event) {
    event.preventDefault();
    if (event.clipboardData) {
        event.clipboardData.setData("text/plain", click_item.textContent);
        alert("Copied the text: " +event.clipboardData.getData("text"))
        console.log(event.clipboardData.getData("text"))
    }
});
