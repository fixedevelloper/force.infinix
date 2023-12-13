const stakingaddress = "0xE0C682C5Bd0Bdd129DFea76eCd1EB4C0698F726c";
const StakingnmatrixAbi = [{ "inputs": [{ "internalType": "address", "name": "token", "type": "address" }], "stateMutability": "nonpayable", "type": "constructor" }, { "anonymous": false, "inputs": [{ "indexed": false, "internalType": "address", "name": "_user", "type": "address" }, { "indexed": false, "internalType": "bool", "name": "treeComplete", "type": "bool" }, { "indexed": false, "internalType": "uint256", "name": "user4thParent", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "_level", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "userPosition", "type": "uint256" }], "name": "debugEv", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": false, "internalType": "uint256", "name": "from", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "to", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "amount", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "level", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "timeNow", "type": "uint256" }], "name": "directPaidEv", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": false, "internalType": "uint256", "name": "amount", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "toID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "level", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "timeNow", "type": "uint256" }], "name": "levelBuyEv", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": false, "internalType": "uint256", "name": "_userID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "parentID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "amount", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "fromDown", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "timeNow", "type": "uint256" }], "name": "payForCoreEv", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": false, "internalType": "uint256", "name": "_userID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "parentID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "amount", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "fromDown", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "timeNow", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "payForCore_NewEv", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": false, "internalType": "uint256", "name": "_userID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "_referrerID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "timeNow", "type": "uint256" }, { "indexed": false, "internalType": "address", "name": "_user", "type": "address" }, { "indexed": false, "internalType": "address", "name": "_referrer", "type": "address" }], "name": "regLevelEv", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": false, "internalType": "uint256", "name": "_userID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "_userPosition", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "amount", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "placing", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "timeNow", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "_parent", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "treeEv", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": false, "internalType": "uint256", "name": "_userID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "_userPosition", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "amount", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "placing", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "timeNow", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "_parent", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "tree_NewEv", "type": "event" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }, { "internalType": "uint256", "name": "", "type": "uint256" }], "name": "activeGoldInfos", "outputs": [{ "internalType": "uint256", "name": "currentParent", "type": "uint256" }, { "internalType": "uint256", "name": "position", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }, { "internalType": "uint256", "name": "", "type": "uint256" }, { "internalType": "uint256", "name": "", "type": "uint256" }], "name": "archivedGoldInfos", "outputs": [{ "internalType": "uint256", "name": "currentParent", "type": "uint256" }, { "internalType": "uint256", "name": "position", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "newTokenaddress", "type": "address" }], "name": "assignAd", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "newcoreAddress", "type": "address" }], "name": "assignCoreAddress", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "buyCore", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "usermsg", "type": "address" }, { "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "buyCore_own", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "coreAddress", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "name": "coreAddressByID", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "coreInfos", "outputs": [{ "internalType": "bool", "name": "joined", "type": "bool" }, { "internalType": "uint256", "name": "id", "type": "uint256" }, { "internalType": "uint256", "name": "origRef", "type": "uint256" }, { "internalType": "uint256", "name": "levelBought", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "corePermitted", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "name": "corePrice", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "defaultRefID", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "_origRef", "type": "address" }, { "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "findEligibleRef", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "uint256", "name": "refID_", "type": "uint256" }, { "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "findFreeParentInDown", "outputs": [{ "internalType": "uint256", "name": "parentID", "type": "uint256" }, { "internalType": "bool", "name": "noFreeReferrer", "type": "bool" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "_user", "type": "address" }, { "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "getPosition", "outputs": [{ "internalType": "uint256", "name": "recyclePosition_", "type": "uint256" }, { "internalType": "uint256", "name": "recycleID", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "_user", "type": "address" }, { "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "getValidRef", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "lastCoreCount", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "maxDownLimit", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "owner", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "regPermitted", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "ref", "type": "address" }], "name": "subCore", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "usermsg", "type": "address" }, { "internalType": "address", "name": "ref", "type": "address" }], "name": "subCore_own", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "tokenAddress", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "_user", "type": "address" }, { "internalType": "uint256", "name": "_level", "type": "uint256" }, { "internalType": "bool", "name": "_archived", "type": "bool" }, { "internalType": "uint256", "name": "_archivedIndex", "type": "uint256" }], "name": "viewChilds", "outputs": [{ "internalType": "address[2]", "name": "_child", "type": "address[2]" }], "stateMutability": "view", "type": "function" }];

var balance_MAIN = "100000000000000000000000";
const tokenaddress = "0xc6e07189bc7565D53CE1C7744879620cCC70C17F";
const json_contractABI= $.getJSON('../contract/contract_final.json')
const  tokenmatrixAbi= $.getJSON('../contract/contrat_test.json')
console.log(json_contractABI)
$(document).ready(async function () {
    // debugger
    console.log("ready!");

    if (window.ethereum) {
        console.log("-----------------INFINIX init------------");
        window.web3 = new Web3(ethereum);
        try {
            // Request account access if needed
           // await ethereum.enable();

            var networkid = await web3.eth.net.getId()
            $('#network_approuve').text("Network: "+networkid)

            if (networkid !== 56) {
                alert('Connect to BNB Mainnet Network');
            }
            else {
                $('#network_approuve').addClass('list-group-item-success');
                $('#network_approuve').removeClass('list-group-item-danger');
               // coinrate();
                var id_user=$('#id_user_smart').text();
/*                var address= await getIDUser(Number.parseInt(id_user))
                $('#address_user_smart').text(address)*/
                setnumberDashboard(Number.parseInt(id_user))
            }

            web3.eth.sendTransaction({/* ... */ });
        } catch (error) {
            // User denied account access...
        }
    }
    else if (window.web3) {
        window.web3 = new Web3(web3.currentProvider);
        web3.eth.sendTransaction({/* ... */ });
    }
    else {
        console.log('Non-Ethereum browser detected. You should consider trying MetaMask!');
        alert('Requires ETH purse to interact smart contract You should consider trying MetaMask!');
        //requiredMetamask();
    }
});

$('#spinner_approuve').hide();
$('#spinner_register').hide();

async function getContrat(){

}

async function connect() {

    if (window.ethereum) {
        window.web3 = new Web3(ethereum);
        try {
            await ethereum.request({
                method: 'eth_requestAccounts'
            });
            //getAccount();
        } catch (error) {
            alert("User Rejected Permission");
            console.log('user rejected permission');
        }
    } else if (window.web3) {
        window.web3 = new Web3(web3.currentProvider);
        console.log('all ok');
    } else {
        console.log('No web3 provider detected');
        alert(" Wallet Not Connected");
    }
}
async function buy_machin(level){
    const account = await getCurrentAccount();
    window.mxgfcontract = await new window.web3.eth.Contract(JSON.parse(json_contractABI.responseText), stakingaddress);
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
async function getIDUser(id){
    window.mxgfcontract = await new window.web3.eth.Contract(JSON.parse(json_contractABI.responseText), stakingaddress);
    return await window.mxgfcontract.methods.idToAddress(Number.parseInt(id)).call();
}
async function setnumberDashboard(id){
    window.mxgfcontract = await new window.web3.eth.Contract(JSON.parse(json_contractABI.responseText), stakingaddress);
    var adresse = await window.mxgfcontract.methods.idToAddress(Number.parseInt(id)).call();
    var patners = await window.mxgfcontract.methods.getDirectPartnersCount(adresse).call();
    var getDirectReferrerReward = await window.mxgfcontract.methods.getDirectReferrerReward(adresse).call();
   // var getIndirectReferrerOfReferrerReward = await window.mxgfcontract.methods.getIndirectReferrerOfReferrerReward(adresse).call();
   // var getUserDirectReferrer = await window.mxgfcontract.methods.getUserDirectReferrer(adresse).call();
    var S10_INCOME = await window.mxgfcontract.methods.S10_INCOME(adresse).call();
    var S4_MACHINEIncome = await window.mxgfcontract.methods.S4_MACHINEIncome(adresse).call();
    var randomRewards = await window.mxgfcontract.methods.RandomRewards(adresse).call();
    var getUserCurrentLevel = await window.mxgfcontract.methods.getUserCurrentLevel(adresse).call();
  //  var getChildAddress= await window.mxgfcontract.methods.getDirectDownlineInfos(adresse).call();
   // var childs=await makeActivate(adresse);
    console.log(childs)
    var childs=[]
    currentLevel(getUserCurrentLevel,childs)
    currentLevelGrandiant(getUserCurrentLevel)
    $('#address_user_smart').text(adresse)
    $('#dash_partners').text(patners)
    $('#S10_INCOME').text("S10_INCOME:"+roundDecimal(convertDiv(S10_INCOME)))
    $('#getDirectReferrerReward')
        .text("DirectReferrerReward:"+roundDecimal(convertDiv(getDirectReferrerReward)))
    $('#S4_MACHINEIncome').text("S4_MACHINEIncome: "+roundDecimal(convertDiv(S4_MACHINEIncome)))
    $('#randomRewards').text("RandomRewards: "+roundDecimal(convertDiv(randomRewards)))
    var total= Number(convertDiv(S10_INCOME))+Number(convertDiv(S4_MACHINEIncome))+Number(convertDiv(getDirectReferrerReward))+Number(convertDiv(randomRewards));
    $('#total_earning').text(roundDecimal(total))
    $('#order_total').text(roundDecimal(total)+' USD')
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

async function coinrate() {
    const account = await getCurrentAccount();

    window.mxgfcontract = await new window.web3.eth.Contract(JSON.parse(json_contractABI.responseText), tokenaddress);

    /*  var balance = await window.mxgfcontract.methods.getRefferresInfos(account).call({ from: account });
      if (balance) {
          if (balance > 1) {
              alert('Wallet approve successfully')
              $('#tknapprove1').hide();
              $('#regnbtn1').show();

          }
          else {
              alert('Wallet is not approved')
              $('#tknapprove1').show();
              $('#regnbtn1').hide();
          }

      }*/

}

function parse(data) {
    return ethers.utils.parseUnits(Math.ceil(data) + '', 'gwei');
}

async function calcGas(gasEstimated) {
    let gas = {
        gasLimit: gasEstimated, //.mul(110).div(100)
        maxFeePerGas: ethers.BigNumber.from(50000000000),
        maxPriorityFeePerGas: ethers.BigNumber.from(60000000000)
    };
    try {
        $.get('https://gasstation-mainnet.matic.network/v2', function (result) {
            gas.maxFeePerGas = parse(result.fast.maxFee);
            gas.maxPriorityFeePerGas = parse(result.fast.maxPriorityFee);

        });

    } catch (error) {

    }
    return gas;
}


async function initApp_token() {
    $('#spinner_approuve').show();
    const account = await getCurrentAccount();
    console.log(account)
    window.mxgfcontract = await new window.web3.eth.Contract(JSON.parse(tokenmatrixAbi.responseText), tokenaddress);

    const gasEstimated = await window.mxgfcontract.methods.approve(stakingaddress, BigInt(balance_MAIN)).estimateGas({ from: account });
    const gas = await calcGas(gasEstimated);

    var balance = await window.mxgfcontract.methods.approve(stakingaddress, BigInt(balance_MAIN)).send({
        from: account,
        gasLimit: 52742,
        gas: 52742,
        //gasLimit: gas.gasLimit,
        //gas: 400000,
        //maxPriorityFeePerGas: gas.maxPriorityFeePerGas,
        //maxFeePerGas: gas.maxFeePerGas,
    });

    //var mxgfrate = await window.mxgfcontract.methods.TokenPrices().call();
    if (balance.transactionHash) {
        if (balance.transactionHash) {
            alert('Wallet approve successfully')
            $('#usdt_approve_id').addClass('list-group-item-success');
            $('#balance_id').addClass('list-group-item-success');
            $('#usdt_approve_id').removeClass('list-group-item-danger');
            $('#balance_id').removeClass('list-group-item-danger');

            // $('#balance_id').text(''+balance.transactionHash);
            $('#spinner_approuve').hide();
        }
        else {
            alert('Wallet approve Failed')

            $('#spinner_approuve').hide();
        }

    }
}


async function buy() {
    console.log("ready main buystt code!");
    $('#spinner_register').show();
    const accountss = await getCurrentAccount();

    window.mxgfcontract = await new window.web3.eth.Contract(JSON.parse(json_contractABI.responseText), stakingaddress);

    var refid = document.getElementById("referralid").value;

    if (document.getElementById("referralid").value == '') {
        alert("Enter your iD")
        $('#spinner_register').hide();
    }
    else if (isNaN(document.getElementById("referralid").value)) {
        alert("Enter your ID as numeric value")
        $('#spinner_register').hide();
    }
    else {
        // const gasEstimated = await window.mxgfcontract.methods.subCore(ref).estimateGas({ from: accountss });
        const result = await window.mxgfcontract.methods.register(accountss,document.getElementById("referralid").value).send({
            from: accountss,
            // gasLimit: 52742,
            //  gas: 52742,
            //gasLimit: gas.gasLimit,
            //gas: 400000,
            //maxPriorityFeePerGas: gas.maxPriorityFeePerGas,
            //maxFeePerGas: gas.maxFeePerGas,
        });
        console.log('Buy result : -' + result);
        console.log(JSON.stringify((result)));
        if (result.status===true) {
            alert('Registration Successfully ');
            $('#spinner_register').hide();
            // var url = "/Home/Success?userIDdd=" + accountss + "&referrerId=" + ref + "&txthash=" + result.transactionHash;
            //  window.location.href = url;
        }
        else { alert('Registration failed' + JSON.stringify((result)));
            $('#spinner_register').hide();}
        /* const ref = await window.mxgfcontract.methods.coreAddressByID(document.getElementById("referralid").value).call({ from: accountss });

           if (ref == '') {
               alert('Refrrel Id does not exists');
           }
           else {

               const gasEstimated = await window.mxgfcontract.methods.subCore(ref).estimateGas({ from: accountss });
                 const result = await window.mxgfcontract.methods.subCore(ref).send({
                   from: accountss,
                   //gasLimit: gas.gasLimit,
                   ////gas: 400000,
                   //maxPriorityFeePerGas: gas.maxPriorityFeePerGas,
                   //maxFeePerGas: gas.maxFeePerGas,
               });
               console.log('Buy result : -' + result);
               if (result.transactionHash) {
                   alert('Registration Successfully ');
                  // var url = "/Home/Success?userIDdd=" + accountss + "&referrerId=" + ref + "&txthash=" + result.transactionHash;
                 //  window.location.href = url;
               }
               else { alert('Registration failed' + result); }

           }*/
    }


}
function register() {
    buy();
}
function approve() {
    initApp_token()
}
function convertDiv(amount) {
    if (amount>0){
        return amount/1000000000000000000;
    }
    return amount;
}
function currentLevel(level,childs) {
const levels=[1,2,3,4,5,6,7,8,9,10]
    for (const i of levels) {
        if (i<=level){
            const isactivate=childs.includes(level)
            childs = childs.filter(element => element !== "0");
            let count = childs.filter(x => x === level).length
            $('#level_users').append('<div class="cas"><div class="row"><div class="col-md-6"><p>' +
                '<img class="cas_img" src="../img/admin/1.svg"><span>10</span></p></div><div class="col-md-6"><span>LVL'+i+'</span></div> ' +
                '</div><div class="row container d-flex justify-content-between"> <span class="circle_level_activate rounded-circle" id="lv1_'+i+'"></span>' +
                '<span class="circle_level_activate rounded-circle" id="lv2_'+i+'"></span><span class="circle_level_activate rounded-circle" id="lv3_'+i+'"></span></div>' +
                '<div class="row "><div class="col-md-6 mt-3"><p><img class="cas_img" src="../img/admin/3.svg"><span style="">'+count+'</span></p></div>' +
                '<div class="col-md-6 mt-3"></div></div></div>')

            if (isactivate){
                const id="#lv1_"+i
                $(id).addClass("circle_level")
                $(id).removeClass("circle_level_activate")
            }
        if (childs.length>1){
            const id="#lv2_"+i
            $(id).addClass("circle_level")
            $(id).removeClass("circle_level_activate")
        }
        }else {
            $('#level_users').append('<div class="cas"><div class="row"><div class="col-md-6"><p>' +
                '<img class="cas_img" src="../img/admin/1.svg"><span>10</span></p></div><div class="col-md-6"><span>LVL'+i+'</span></div> ' +
                '</div><div class=" container d-flex justify-content-center"><a href="javascript:;" onclick="upGradeLevel('+i+')"><img class="cas_img_buy" src="../img/admin/7.svg"></a> </div>' +
                '<div class="row "><div class="col-md-6 mt-3"><p><img class="cas_img" src="../img/admin/3.svg"><span style=""></span></p></div>' +
                '<div class="col-md-6 mt-3"><img class="cas_img" src="../img/admin/8.svg"></div></div></div>')
        }

    }

}
function currentLevelGrandiant(level) {
    const levels=[1,2,3,4,5,6,7,8,9,10]
    for (const i of levels) {
        if (i<=level){
            $('#level_gradian').append('<a class="btn btn-sm bg-success col-xs-2 col-md-2 col-sm-4 col-xl-2 m-1"></a>')
        }else {
            $('#level_gradian').append('<a class="btn btn-sm bg-info col-xs-2 col-md-2 col-sm-4 col-xl-2 m-1"></a>')
        }

    }

}
async function upGradeLevel(level) {
    console.log(level)
    await buy_machin(level);
}
async function makeActivate(adresse) {
    window.mxgfcontract = await new window.web3.eth.Contract(JSON.parse(json_contractABI.responseText), stakingaddress);
   var lv1=0;
    let lv2 = 0;var lv3=0;var lv4=0;var lv5=0;var lv6=0;var lv7=0;var lv8=0;var lv9=0;var lv10=0;
    var childs= await window.mxgfcontract.methods.getDirectDownlineInfos(adresse).call();
    var arrays=[];
    for (let i = 0; i < childs[0].length; i++) {
        var currentLevelChild = await window.mxgfcontract.methods.getUserCurrentLevel(childs[0][i]).call();
        arrays.push(currentLevelChild)

    }
    return arrays
}

function removeDuplicates(arr) {
    let unique = arr.reduce(function (acc, curr) {
        if (!acc.includes(curr))
            acc.push(curr);
        return acc;
    }, []);
    return unique;
}


