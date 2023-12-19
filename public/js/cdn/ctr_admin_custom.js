const stakingaddress = "0x4369dC31c2f6D65a4681b3aBdE7c053f48C0d66A";
const StakingnmatrixAbi = [{"inputs":[{"internalType":"address","name":"_token","type":"address"}],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"user","type":"address"},{"indexed":true,"internalType":"uint256","name":"level","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"},{"indexed":true,"internalType":"address","name":"referrer","type":"address"}],"name":"LevelPurchased","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"user","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"}],"name":"RandomRewardsDistributed","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"user","type":"address"},{"indexed":true,"internalType":"address","name":"directReferrer","type":"address"}],"name":"Registration","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"uint256","name":"newFee","type":"uint256"}],"name":"RegistrationFeeChanged","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"user","type":"address"},{"indexed":true,"internalType":"address","name":"referrer","type":"address"}],"name":"RegistrationbyUser","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"user","type":"address"},{"indexed":true,"internalType":"uint256","name":"level","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"},{"indexed":true,"internalType":"address","name":"directReferrer","type":"address"}],"name":"SponsorRewardsDistributed","type":"event"},{"inputs":[{"internalType":"address","name":"userToUpgrade","type":"address"},{"internalType":"uint256","name":"_level","type":"uint256"}],"name":"Buy_Machine_Qore_For","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"RandomRewards","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"}],"name":"S10_INCOME","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"}],"name":"S4_MACHINEIncome","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"UpgradeIncome","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"changeOwner","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"checkUpdate","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"}],"name":"getDirectDownlineInfos","outputs":[{"internalType":"address[]","name":"","type":"address[]"},{"internalType":"uint256[]","name":"","type":"uint256[]"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"}],"name":"getDirectPartnersCount","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"}],"name":"getDirectReferrerReward","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"}],"name":"getIndirectReferrerOfReferrerReward","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"}],"name":"getIndirectReferrerReward","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"getLastRegistration","outputs":[{"internalType":"uint256","name":"userID","type":"uint256"},{"internalType":"address","name":"referrer","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"_user","type":"address"}],"name":"getUserCurrentLevel","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"_user","type":"address"}],"name":"getUserDirectReferrer","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"","type":"uint256"}],"name":"idToAddress","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"","type":"uint256"}],"name":"levelPrices","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"numberOfUsers","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"","type":"uint256"}],"name":"paymentsMade","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"randomUser","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"referrers","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"newUser","type":"address"},{"internalType":"address","name":"directReferrer","type":"address"}],"name":"register","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"registrationFee","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"newFee","type":"uint256"}],"name":"setRegistrationFee","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"_token","type":"address"}],"name":"setTokenContract","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"token","outputs":[{"internalType":"contract IERC20","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalContributions","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalLevels","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"totalRewards","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"transferToReferrerRewards","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"","type":"uint256"}],"name":"userAddresses","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"userCurrentLevel","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"userDirectReferrer","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"userIDs","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"userLevels","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"users","outputs":[{"internalType":"uint256","name":"id","type":"uint256"},{"internalType":"address","name":"referrer","type":"address"},{"internalType":"uint256","name":"level","type":"uint256"}],"stateMutability":"view","type":"function"},{"stateMutability":"payable","type":"receive"}]
var balance_MAIN = "100000000000000000000000";
const tokenaddress = "0x8ac76a51cc950d9822d68b83fe1ad97b32cd580d";
//const json_contractABI= $.getJSON('../contract/contract_final.json')
const  tokenmatrixAbi= $.getJSON('../contract/contrat_test.json')
//console.log(json_contractABI)
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

                await setnumberDashboard(Number.parseInt(id_user))
                $('#spinner_dashboard').hide()
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
        console.log('Non-Ethereum browser detected. You should consider trying MetaMask!');
        alert('Requires ETH purse to interact smart contract You should consider trying MetaMask!');
        //requiredMetamask();
    }
});

$('#spinner_approuve').hide();
$('#spinner_register').hide();

async function loadContract(){
    window.mxgfcontract = await new window.web3.eth.Contract(JSON.parse(json_contractABI.responseText), tokenaddress);
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
async function getIDUser(id){
    window.mxgfcontract = await new window.web3.eth.Contract(JSON.parse(json_contractABI.responseText), stakingaddress);
    return await window.mxgfcontract.methods.idToAddress(Number.parseInt(id)).call();
}
async function setnumberDashboard(id){
    window.mxgfcontract = await new window.web3.eth.Contract(StakingnmatrixAbi, stakingaddress);
    var adresse = await window.mxgfcontract.methods.idToAddress(Number.parseInt(id)).call();

    $('#address_user_smart').text(adresse)
    var newJoined = await window.mxgfcontract.methods.getLastRegistration().call();
    $('#newJoined').text("ID: "+newJoined.userID)
    var patners = await window.mxgfcontract.methods.getDirectPartnersCount(adresse).call();
    $('#dash_partners').text(patners)
    var getDirectReferrerReward = await window.mxgfcontract.methods.getDirectReferrerReward(adresse).call();
    // var getIndirectReferrerOfReferrerReward = await window.mxgfcontract.methods.getIndirectReferrerOfReferrerReward(adresse).call();
     var getUserDirectReferrer = await window.mxgfcontract.methods.getUserDirectReferrer(adresse).call();
    $('#parent_id').val(Number.parseInt(getUserDirectReferrer))
    var S10_INCOME = await window.mxgfcontract.methods.S10_INCOME(adresse).call();
    $('#S10_INCOME').text(roundDecimal(convertDiv(S10_INCOME)))
    var S4_MACHINEIncome = await window.mxgfcontract.methods.S4_MACHINEIncome(adresse).call();
    var randomRewards = await window.mxgfcontract.methods.RandomRewards(adresse).call();
    var getUserCurrentLevel = await window.mxgfcontract.methods.getUserCurrentLevel(adresse).call();

    $('#getDirectReferrerReward')
        .text(roundDecimal(convertDiv(getDirectReferrerReward)))
    $('#S4_MACHINEIncome').text(roundDecimal(convertDiv(S4_MACHINEIncome)))
    $('#randomRewards').text(roundDecimal(convertDiv(randomRewards)))
    var total= Number(convertDiv(S10_INCOME))+Number(convertDiv(S4_MACHINEIncome))+Number(convertDiv(getDirectReferrerReward))+Number(convertDiv(randomRewards));
    $('#total_earning').text(roundDecimal(total))
    $('#order_total').text(roundDecimal(total)+' USDC')
    var getChildAddress= await window.mxgfcontract.methods.getDirectDownlineInfos(adresse).call();
    console.log(getChildAddress)
    currentLevel(getUserCurrentLevel,getChildAddress[1])
    currentLevelGrandiant(getUserCurrentLevel)
   /* let part=Number.parseInt(patners);
    for (let i = 0; i < filterAdresse(getChildAddress[0]).length; i++) {
       let part_ = await window.mxgfcontract.methods.getDirectDownlineInfos(getChildAddress[0][i]).call();
       let direct= await window.mxgfcontract.methods.getDirectPartnersCount(getChildAddress[0][i]).call()
        part+=Number.parseInt(direct)
        console.log("direct******"+direct)
        for (let j = 0; j <filterAdresse(part_[0]).length; j++) {
            let direct_= await window.mxgfcontract.methods.getDirectPartnersCount(part_[0][j]).call()
            part+=Number.parseInt(direct_)
            console.log("direct____"+direct_)
        }
    }*/
    $('.loader').show()
   let part= await calculateTotalTeam(adresse)
    console.log(part)
    $('#direct_partners').text(part)
    $('.loader').hide()
}
function filterAdresse(tabs) {
    childs = tabs.filter(element => element !== "0x0000000000000000000000000000000000000000");
    return childs;
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
    const levels_price=[10,20,30,40,100,200,300,500,1250,2500]
    for (const i of levels) {
        if (i<=level){
            const isactivate=childs.includes(i.toString())
            childs = childs.filter(element => element !== "0");
            let count = childs.filter(x => x === level.toString()).length
            $('#level_users').append('<div class="cas"><div class="row">' +
                '<div class="col-sm-6 col-md-6"><p>' +
                '<img class="cas_img" src="../img/admin/1.svg"><span>'+levels_price[i-1]+'</span></p></div>' +
                '<div class="col-sm-6 col-md-6"><span>LVL'+i+'</span></div> ' +
                '</div><div class="row container d-flex justify-content-between">' +
                ' <span class="circle_level_activate rounded-circle" id="lv1_'+i+'"></span>' +
                '<span class="circle_level_activate rounded-circle" id="lv2_'+i+'"></span><span class="circle_level_activate rounded-circle" id="lv3_'+i+'"></span></div>' +
                '<div class="row "><div class="col-md-6 mt-3"><p><img class="cas_img" src="../img/admin/3.svg"><span style="">'+count+'</span></p></div>' +
                '<div class="col-md-6 mt-3"></div></div></div>')

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
                '</div><div class="d-flex justify-content-center"><a href="javascript:;" onclick="upGradeLevel('+i+')"><img class="cas_img_buy" src="../img/admin/7.svg"></a> </div>' +
                '<div class="row "><div class="col-6 col-md-6 mt-3"><p><img class="cas_img" src="../img/admin/3.svg"><span style=""></span></p></div>' +
                '<div class="col-6 col-md-6 mt-3"><img class="cas_img" src="../img/admin/8.svg"></div></div></div>')
        }

    }
}
function currentLevelGrandiant(level) {
    const levels=[1,2,3,4,5,6,7,8,9,10]
    for (const i of levels) {
        if (i<=level){
            $('#level_gradian').append('<div class="x_m bg-blue col-xs-2 col-md-3 col-sm-4 col-xl-3 m-1"></div>')
        }else {
            $('#level_gradian').append('<div class="x_m bg-gray600 col-xs-2 col-md-3 col-sm-4 col-xl-3 m-1"></div>')
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
async function calculDirectPaners(childs) {
    window.mxgfcontract = await new window.web3.eth.Contract(JSON.parse(json_contractABI.responseText), stakingaddress);
    let part=0;
    for (let i = 0; i < childs.length; i++) {
        part += await window.mxgfcontract.methods.getDirectPartnersCount(childs[i]).call();
    }
    $('#direct_partners').text(part)
}

function removeDuplicates(arr) {
    let unique = arr.reduce(function (acc, curr) {
        if (!acc.includes(curr))
            acc.push(curr);
        return acc;
    }, []);
    return unique;
}
async function calculateTotalTeam( userAddress, visited = new Set()) {
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
        totalCount += Number.parseInt(await calculateTotalTeam( partnerAddress, visited)) ;
    }

    return totalCount;
}
async function calculateTotalTeamImpl(contract, userAddress, visited = new Set()) {
    if (visited.has(userAddress)) {
        return 0;
    }

    visited.add(userAddress);
    const directCount = await getDirectPartnersCount(contract, userAddress);
    let totalCount = directCount;

    // Supposons que vous ayez une fonction pour obtenir les adresses des partenaires directs
    const partnersAddresses = await getDirectPartnersAddresses(contract, userAddress);
    for (const partnerAddress of partnersAddresses) {
        totalCount += await calculateTotalTeam(contract, partnerAddress, visited);
    }

    return totalCount;
}

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
