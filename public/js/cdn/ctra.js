$(document).ready(async function () {
   // debugger
    console.log("ready!");

    if (window.ethereum) {
        console.log("-----------------INFINIX init------------");
        window.web3 = new Web3(ethereum);
        try {
            // Request account access if needed
            await ethereum.enable();

            var networkid = await web3.eth.net.getId()
           // var networkname = await web3.eth.net.getChainId()
            console.log("networkid " + networkid);
            $('#network_approuve').text("Network: "+networkid)

            if (networkid !== 56) {
                alert('Connect to BNB Mainnet Network');
/*                $('#network_approuve').addClass('list-group-item-success');
                $('#network_approuve').removeClass('list-group-item-danger');*/
                $('#regnbtn1').hide();
            }
            else {
                $('#network_approuve').addClass('list-group-item-success');
                $('#network_approuve').removeClass('list-group-item-danger');
                coinrate();
                getIDUser(1);
                //initApp_token();

            }


            // Acccounts now exposed
            web3.eth.sendTransaction({/* ... */ });
        } catch (error) {
            // User denied account access...
        }
    }
    // Legacy dapp browsers...
    else if (window.web3) {
        window.web3 = new Web3(web3.currentProvider);
        // console.log(web3);
    }
    // Non-dapp browsers...
    else {
        console.log('Non-Ethereum browser detected. You should consider trying MetaMask!');
        alert('Requires ETH purse to interact smart contract You should consider trying MetaMask!');
        //requiredMetamask();
    }
});

$('#spinner_approuve').hide();
$('#spinner_register').hide();
const stakingaddress = "0x4369dC31c2f6D65a4681b3aBdE7c053f48C0d66A";
const StakingnmatrixAbi = [{ "inputs": [{ "internalType": "address", "name": "token", "type": "address" }], "stateMutability": "nonpayable", "type": "constructor" }, { "anonymous": false, "inputs": [{ "indexed": false, "internalType": "address", "name": "_user", "type": "address" }, { "indexed": false, "internalType": "bool", "name": "treeComplete", "type": "bool" }, { "indexed": false, "internalType": "uint256", "name": "user4thParent", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "_level", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "userPosition", "type": "uint256" }], "name": "debugEv", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": false, "internalType": "uint256", "name": "from", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "to", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "amount", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "level", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "timeNow", "type": "uint256" }], "name": "directPaidEv", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": false, "internalType": "uint256", "name": "amount", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "toID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "level", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "timeNow", "type": "uint256" }], "name": "levelBuyEv", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": false, "internalType": "uint256", "name": "_userID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "parentID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "amount", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "fromDown", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "timeNow", "type": "uint256" }], "name": "payForCoreEv", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": false, "internalType": "uint256", "name": "_userID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "parentID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "amount", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "fromDown", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "timeNow", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "payForCore_NewEv", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": false, "internalType": "uint256", "name": "_userID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "_referrerID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "timeNow", "type": "uint256" }, { "indexed": false, "internalType": "address", "name": "_user", "type": "address" }, { "indexed": false, "internalType": "address", "name": "_referrer", "type": "address" }], "name": "regLevelEv", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": false, "internalType": "uint256", "name": "_userID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "_userPosition", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "amount", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "placing", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "timeNow", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "_parent", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "treeEv", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": false, "internalType": "uint256", "name": "_userID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "_userPosition", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "amount", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "placing", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "timeNow", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "_parent", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "tree_NewEv", "type": "event" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }, { "internalType": "uint256", "name": "", "type": "uint256" }], "name": "activeGoldInfos", "outputs": [{ "internalType": "uint256", "name": "currentParent", "type": "uint256" }, { "internalType": "uint256", "name": "position", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }, { "internalType": "uint256", "name": "", "type": "uint256" }, { "internalType": "uint256", "name": "", "type": "uint256" }], "name": "archivedGoldInfos", "outputs": [{ "internalType": "uint256", "name": "currentParent", "type": "uint256" }, { "internalType": "uint256", "name": "position", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "newTokenaddress", "type": "address" }], "name": "assignAd", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "newcoreAddress", "type": "address" }], "name": "assignCoreAddress", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "buyCore", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "usermsg", "type": "address" }, { "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "buyCore_own", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "coreAddress", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "name": "coreAddressByID", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "coreInfos", "outputs": [{ "internalType": "bool", "name": "joined", "type": "bool" }, { "internalType": "uint256", "name": "id", "type": "uint256" }, { "internalType": "uint256", "name": "origRef", "type": "uint256" }, { "internalType": "uint256", "name": "levelBought", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "corePermitted", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "name": "corePrice", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "defaultRefID", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "_origRef", "type": "address" }, { "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "findEligibleRef", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "uint256", "name": "refID_", "type": "uint256" }, { "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "findFreeParentInDown", "outputs": [{ "internalType": "uint256", "name": "parentID", "type": "uint256" }, { "internalType": "bool", "name": "noFreeReferrer", "type": "bool" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "_user", "type": "address" }, { "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "getPosition", "outputs": [{ "internalType": "uint256", "name": "recyclePosition_", "type": "uint256" }, { "internalType": "uint256", "name": "recycleID", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "_user", "type": "address" }, { "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "getValidRef", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "lastCoreCount", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "maxDownLimit", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "owner", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "regPermitted", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "ref", "type": "address" }], "name": "subCore", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "usermsg", "type": "address" }, { "internalType": "address", "name": "ref", "type": "address" }], "name": "subCore_own", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "tokenAddress", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "_user", "type": "address" }, { "internalType": "uint256", "name": "_level", "type": "uint256" }, { "internalType": "bool", "name": "_archived", "type": "bool" }, { "internalType": "uint256", "name": "_archivedIndex", "type": "uint256" }], "name": "viewChilds", "outputs": [{ "internalType": "address[2]", "name": "_child", "type": "address[2]" }], "stateMutability": "view", "type": "function" }];

var balance_MAIN = "100000000000000000000000";
const tokenaddress = "0x8ac76a51cc950d9822d68b83fe1ad97b32cd580d";
const json=$.getJSON('contract/contrat_test.json')
const json_contractABI=$.getJSON('contract/contract_final.json')
const  tokenmatrixAbi= $.getJSON('contract/contrat_test.json')


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

async function getIDUser(id){
    const account = await getCurrentAccount();
    window.mxgfcontract = await new window.web3.eth.Contract(JSON.parse(json_contractABI.responseText), stakingaddress);
    var adresse = await window.mxgfcontract.methods.idToAddress(id).call();
    console.log("*************************************");
    console.log(adresse);
    return adresse;
}

async function getCurrentAccount() {
    const accounts = await window.web3.eth.getAccounts();
    return accounts[0];
}
async function loginAuto(){
    const account = await getCurrentAccount();
    window.mxgfcontract = await new window.web3.eth.Contract(JSON.parse(json_contractABI.responseText), stakingaddress);
    var id = await window.mxgfcontract.methods.userIDs(account).call();
    window.location.href = configs.routes.dashboard+"?id="+id;
}
async function loginById(){
    const id=document.getElementById("login_id").value;
    window.location.href = configs.routes.dashboard+"?id="+id;
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
   //const gas = await calcGas(gasEstimated);
    console.log(gasEstimated)
    var balance = await window.mxgfcontract.methods.approve(stakingaddress, BigInt(balance_MAIN)).send({
        from: account,
        gasLimit: gasEstimated,
        gas: gasEstimated,
        //gasLimit: gas.gasLimit,
        //gas: 400000,
        //maxPriorityFeePerGas: gas.maxPriorityFeePerGas,
        //maxFeePerGas: gas.maxFeePerGas,
    });

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


async function initRegister() {
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
        const referenceAdresse = await getIDUser(document.getElementById("referralid").value);
        const result = await window.mxgfcontract.methods.register(accountss,referenceAdresse).send({
            from: accountss,
           // gasLimit: 52742,
          //  gas: 52742,
            //gasLimit: gas.gasLimit,
            //gas: 400000,
            //maxPriorityFeePerGas: gas.maxPriorityFeePerGas,
            //maxFeePerGas: gas.maxFeePerGas,
        });
        if (result.status===true) {
            alert('Registration Successfully ');
            $('#spinner_register').hide();
            // var url = "/Home/Success?userIDdd=" + accountss + "&referrerId=" + ref + "&txthash=" + result.transactionHash;
              window.location.href = configs.routes.login;
        }
        else { alert('Registration failed' + JSON.stringify((result)));
            $('#spinner_register').hide();}

    }


}
async function login() {
    const id=document.getElementById("login_id").value;
    window.location.href = configs.routes.dashboard+"?id="+id;
}
function register() {
    initRegister();
}
 function approve() {
     initApp_token()
}
async function autologin() {
    var account=getCurrentAccount();
    window.mxgfcontract = await new window.web3.eth.Contract(JSON.parse(json_contractABI.responseText), stakingaddress);
    var id = await window.mxgfcontract.methods.userIDs(Number.parseInt(id)).call();
    window.location.href = configs.routes.dashboard+"?id="+id;

}
