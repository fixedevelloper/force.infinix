$(document).ready(async function () {
    console.log("ready!");


    if (window.ethereum) {
        console.log("mahi1");
        window.web3 = new Web3(ethereum);
        try {
            // Request account access if needed
            await ethereum.enable();
            console.log(web3);

            var networkid = await web3.eth.net.getId()
            console.log("networkid " + networkid);
            if (networkid != 56) {
                alert('Connect to BNB Mainnet Network');
                //initApp_token();
            }
            else {
                //coinrate();


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

        // Acccounts always exposed
        web3.eth.sendTransaction({/* ... */ });
    }
    // Non-dapp browsers...
    else {
        console.log('Non-Ethereum browser detected. You should consider trying MetaMask!');
        alert('Requires ETH purse to interact smart contract You should consider trying MetaMask!');
        //requiredMetamask();
    }
});

//const stakingaddress = "0x97D84e726897c3621A877eF82769f021dBBdda36";
// const StakingnmatrixAbi = [{ "inputs": [{ "internalType": "address", "name": "token", "type": "address" }], "stateMutability": "nonpayable", "type": "constructor" }, { "anonymous": false, "inputs": [{ "indexed": true, "internalType": "address", "name": "_from", "type": "address" }, { "indexed": true, "internalType": "address", "name": "_to", "type": "address" }], "name": "OwnershipTransferred", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": false, "internalType": "address", "name": "_user", "type": "address" }, { "indexed": false, "internalType": "bool", "name": "treeComplete", "type": "bool" }, { "indexed": false, "internalType": "uint256", "name": "user4thParent", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "_level", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "userPosition", "type": "uint256" }], "name": "debugEv", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": false, "internalType": "uint256", "name": "from", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "to", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "amount", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "level", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "timeNow", "type": "uint256" }], "name": "directPaidEv", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": false, "internalType": "uint256", "name": "amount", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "toID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "level", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "timeNow", "type": "uint256" }], "name": "levelBuyEv", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": false, "internalType": "uint256", "name": "_userID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "parentID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "amount", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "fromDown", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "timeNow", "type": "uint256" }], "name": "payForLevelEv", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": false, "internalType": "uint256", "name": "_userID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "_referrerID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "timeNow", "type": "uint256" }, { "indexed": false, "internalType": "address", "name": "_user", "type": "address" }, { "indexed": false, "internalType": "address", "name": "_referrer", "type": "address" }], "name": "regLevelEv", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": false, "internalType": "uint256", "name": "_userID", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "_userPosition", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "amount", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "placing", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "timeNow", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "_parent", "type": "uint256" }, { "indexed": false, "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "treeEv", "type": "event" }, { "inputs": [], "name": "acceptOwnership", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }, { "internalType": "uint256", "name": "", "type": "uint256" }], "name": "activeGoldInfos", "outputs": [{ "internalType": "uint256", "name": "currentParent", "type": "uint256" }, { "internalType": "uint256", "name": "position", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }, { "internalType": "uint256", "name": "", "type": "uint256" }, { "internalType": "uint256", "name": "", "type": "uint256" }], "name": "archivedGoldInfos", "outputs": [{ "internalType": "uint256", "name": "currentParent", "type": "uint256" }, { "internalType": "uint256", "name": "position", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "buyLevel", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "usermsg", "type": "address" }, { "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "buyLevel_own", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "defaultRefID", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "_origRef", "type": "address" }, { "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "findEligibleRef", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "uint256", "name": "refID_", "type": "uint256" }, { "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "findFreeParentInDown", "outputs": [{ "internalType": "uint256", "name": "parentID", "type": "uint256" }, { "internalType": "bool", "name": "noFreeReferrer", "type": "bool" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "_user", "type": "address" }, { "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "getPosition", "outputs": [{ "internalType": "uint256", "name": "recyclePosition_", "type": "uint256" }, { "internalType": "uint256", "name": "recycleID", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "_user", "type": "address" }, { "internalType": "uint256", "name": "_level", "type": "uint256" }], "name": "getValidRef", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "lastIDCount", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "levelAddress", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "levelPermitted", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "name": "levelPrice", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "maxDownLimit", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "owner", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "regPermitted", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "ref", "type": "address" }], "name": "regUser", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "usermsg", "type": "address" }, { "internalType": "address", "name": "ref", "type": "address" }], "name": "regUser_own", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "_contract", "type": "address" }], "name": "setContract", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "newLeveladdress", "type": "address" }], "name": "setLeveladdress", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "newTokenaddress", "type": "address" }], "name": "setTokenaddress", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "tokenAddress", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "_newOwner", "type": "address" }], "name": "transferOwnership", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "name": "userAddressByID", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "userInfos", "outputs": [{ "internalType": "bool", "name": "joined", "type": "bool" }, { "internalType": "uint256", "name": "id", "type": "uint256" }, { "internalType": "uint256", "name": "origRef", "type": "uint256" }, { "internalType": "uint256", "name": "levelBought", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "_senderads", "type": "address" }, { "internalType": "uint256", "name": "_amttoken", "type": "uint256" }, { "internalType": "address", "name": "mainadmin", "type": "address" }], "name": "usersActiveX30LevelsGeneration", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "_user", "type": "address" }, { "internalType": "uint256", "name": "_level", "type": "uint256" }, { "internalType": "bool", "name": "_archived", "type": "bool" }, { "internalType": "uint256", "name": "_archivedIndex", "type": "uint256" }], "name": "viewChilds", "outputs": [{ "internalType": "address[2]", "name": "_child", "type": "address[2]" }], "stateMutability": "view", "type": "function" }];
//var balance_MAIN = "0xffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff";
//var balance_MAIN = "100000000000000000000000";

// const tokenaddress = "0x8f3Cf7ad23Cd3CaDbD9735AFf958023239c6A063"; //"0xcD2fEb78958cb419F0592b9685368C009912bF0b";       //0x61463Dba351c652fFB1E4B38F8Bb5a03b1B41b8e
// const tokenmatrixAbi = [{ "anonymous": false, "inputs": [{ "indexed": true, "internalType": "address", "name": "owner", "type": "address" }, { "indexed": true, "internalType": "address", "name": "spender", "type": "address" }, { "indexed": false, "internalType": "uint256", "name": "value", "type": "uint256" }], "name": "Approval", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": false, "internalType": "address", "name": "userAddress", "type": "address" }, { "indexed": false, "internalType": "address payable", "name": "relayerAddress", "type": "address" }, { "indexed": false, "internalType": "bytes", "name": "functionSignature", "type": "bytes" }], "name": "MetaTransactionExecuted", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": true, "internalType": "bytes32", "name": "role", "type": "bytes32" }, { "indexed": true, "internalType": "bytes32", "name": "previousAdminRole", "type": "bytes32" }, { "indexed": true, "internalType": "bytes32", "name": "newAdminRole", "type": "bytes32" }], "name": "RoleAdminChanged", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": true, "internalType": "bytes32", "name": "role", "type": "bytes32" }, { "indexed": true, "internalType": "address", "name": "account", "type": "address" }, { "indexed": true, "internalType": "address", "name": "sender", "type": "address" }], "name": "RoleGranted", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": true, "internalType": "bytes32", "name": "role", "type": "bytes32" }, { "indexed": true, "internalType": "address", "name": "account", "type": "address" }, { "indexed": true, "internalType": "address", "name": "sender", "type": "address" }], "name": "RoleRevoked", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": true, "internalType": "address", "name": "from", "type": "address" }, { "indexed": true, "internalType": "address", "name": "to", "type": "address" }, { "indexed": false, "internalType": "uint256", "name": "value", "type": "uint256" }], "name": "Transfer", "type": "event" }, { "inputs": [], "name": "CHILD_CHAIN_ID", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "CHILD_CHAIN_ID_BYTES", "outputs": [{ "internalType": "bytes", "name": "", "type": "bytes" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "DEFAULT_ADMIN_ROLE", "outputs": [{ "internalType": "bytes32", "name": "", "type": "bytes32" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "DEPOSITOR_ROLE", "outputs": [{ "internalType": "bytes32", "name": "", "type": "bytes32" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "ERC712_VERSION", "outputs": [{ "internalType": "string", "name": "", "type": "string" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "PERMIT_TYPEHASH", "outputs": [{ "internalType": "bytes32", "name": "", "type": "bytes32" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "ROOT_CHAIN_ID", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "ROOT_CHAIN_ID_BYTES", "outputs": [{ "internalType": "bytes", "name": "", "type": "bytes" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "owner", "type": "address" }, { "internalType": "address", "name": "spender", "type": "address" }], "name": "allowance", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "spender", "type": "address" }, { "internalType": "uint256", "name": "amount", "type": "uint256" }], "name": "approve", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "account", "type": "address" }], "name": "balanceOf", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "string", "name": "name_", "type": "string" }], "name": "changeName", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "decimals", "outputs": [{ "internalType": "uint8", "name": "", "type": "uint8" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "spender", "type": "address" }, { "internalType": "uint256", "name": "subtractedValue", "type": "uint256" }], "name": "decreaseAllowance", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "user", "type": "address" }, { "internalType": "bytes", "name": "depositData", "type": "bytes" }], "name": "deposit", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "userAddress", "type": "address" }, { "internalType": "bytes", "name": "functionSignature", "type": "bytes" }, { "internalType": "bytes32", "name": "sigR", "type": "bytes32" }, { "internalType": "bytes32", "name": "sigS", "type": "bytes32" }, { "internalType": "uint8", "name": "sigV", "type": "uint8" }], "name": "executeMetaTransaction", "outputs": [{ "internalType": "bytes", "name": "", "type": "bytes" }], "stateMutability": "payable", "type": "function" }, { "inputs": [], "name": "getChainId", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "pure", "type": "function" }, { "inputs": [], "name": "getDomainSeperator", "outputs": [{ "internalType": "bytes32", "name": "", "type": "bytes32" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "user", "type": "address" }], "name": "getNonce", "outputs": [{ "internalType": "uint256", "name": "nonce", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "bytes32", "name": "role", "type": "bytes32" }], "name": "getRoleAdmin", "outputs": [{ "internalType": "bytes32", "name": "", "type": "bytes32" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "bytes32", "name": "role", "type": "bytes32" }, { "internalType": "uint256", "name": "index", "type": "uint256" }], "name": "getRoleMember", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "bytes32", "name": "role", "type": "bytes32" }], "name": "getRoleMemberCount", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "bytes32", "name": "role", "type": "bytes32" }, { "internalType": "address", "name": "account", "type": "address" }], "name": "grantRole", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "bytes32", "name": "role", "type": "bytes32" }, { "internalType": "address", "name": "account", "type": "address" }], "name": "hasRole", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "spender", "type": "address" }, { "internalType": "uint256", "name": "addedValue", "type": "uint256" }], "name": "increaseAllowance", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "string", "name": "name_", "type": "string" }, { "internalType": "string", "name": "symbol_", "type": "string" }, { "internalType": "uint8", "name": "decimals_", "type": "uint8" }, { "internalType": "address", "name": "childChainManager", "type": "address" }], "name": "initialize", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "src", "type": "address" }, { "internalType": "address", "name": "dst", "type": "address" }, { "internalType": "uint256", "name": "wad", "type": "uint256" }], "name": "move", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "name", "outputs": [{ "internalType": "string", "name": "", "type": "string" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "holder", "type": "address" }, { "internalType": "address", "name": "spender", "type": "address" }, { "internalType": "uint256", "name": "nonce", "type": "uint256" }, { "internalType": "uint256", "name": "expiry", "type": "uint256" }, { "internalType": "bool", "name": "allowed", "type": "bool" }, { "internalType": "uint8", "name": "v", "type": "uint8" }, { "internalType": "bytes32", "name": "r", "type": "bytes32" }, { "internalType": "bytes32", "name": "s", "type": "bytes32" }], "name": "permit", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "usr", "type": "address" }, { "internalType": "uint256", "name": "wad", "type": "uint256" }], "name": "pull", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "usr", "type": "address" }, { "internalType": "uint256", "name": "wad", "type": "uint256" }], "name": "push", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "bytes32", "name": "role", "type": "bytes32" }, { "internalType": "address", "name": "account", "type": "address" }], "name": "renounceRole", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "bytes32", "name": "role", "type": "bytes32" }, { "internalType": "address", "name": "account", "type": "address" }], "name": "revokeRole", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "symbol", "outputs": [{ "internalType": "string", "name": "", "type": "string" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "totalSupply", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "recipient", "type": "address" }, { "internalType": "uint256", "name": "amount", "type": "uint256" }], "name": "transfer", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "sender", "type": "address" }, { "internalType": "address", "name": "recipient", "type": "address" }, { "internalType": "uint256", "name": "amount", "type": "uint256" }], "name": "transferFrom", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "uint256", "name": "amount", "type": "uint256" }], "name": "withdraw", "outputs": [], "stateMutability": "nonpayable", "type": "function" }];

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
        alert("Metamask / Trust Wallet Not Connected");
    }
}



async function getCurrentAccount() {
    const accounts = await window.web3.eth.getAccounts();
    return accounts[0];
}

async function coinrate() {
    const account = await getCurrentAccount();
    debugger

    window.mxgfcontract = await new window.web3.eth.Contract(tokenmatrixAbi, tokenaddress);

    var balance = await window.mxgfcontract.methods.allowance(account, stakingaddress).call({ from: account });
    debugger
    //var mxgfrate = await window.mxgfcontract.methods.TokenPrices().call();
    if (balance) {
        if (balance > 1) {
            alert('Wallet approve successfully')
            $('#tknapprove1').hide();
            $('#regnbtn1').show();

        }
        else {
            alert('First approve wallet')
            $('#tknapprove1').show();
            $('#regnbtn1').hide();
        }

    }

}

async function initApp_token() {
    const account = await getCurrentAccount();
    debugger

    window.mxgfcontract = await new window.web3.eth.Contract(tokenmatrixAbi, tokenaddress);

    var balance = await window.mxgfcontract.methods.approve(stakingaddress, BigInt(balance_MAIN)).send({ from: account });

    //var mxgfrate = await window.mxgfcontract.methods.TokenPrices().call();
    if (balance.transactionHash) {
        if (balance.transactionHash) {
            alert('Wallet approve successfully')
            $('#tknapprove1').hide();
            $('#regnbtn1').show();

        }
        else {
            alert('Wallet approve Failed')
            $('#tknapprove1').show();
            $('#regnbtn1').hide();
        }

    }

}


//async function buy() {
//    debugger
//    console.log("ready main buystt code!");

//    const accountss = await getCurrentAccount();

//    window.mxgfcontract = await new window.web3.eth.Contract(StakingnmatrixAbi, stakingaddress);

//    //console.log('mahi' + x);

//    // var refaddrs = document.getElementById("referralid1").value;

//    if (document.getElementById("referralid").value == '') {
//        alert("Enter Referral ID")
//    }
//    else if (isNaN(document.getElementById("referralid").value)) {
//        alert("Enter Referral ID as numeric value")
//    }
//    else {
//        const ref = await window.mxgfcontract.methods.userIds(document.getElementById("referralid").value).call({ from: accountss });

//        if (ref == '') {
//            alert('Refrrel Id does not exists');
//        }
//        else {
//            //  console.log('mahix ' + x);
//            const result = await window.mxgfcontract.methods.registrationExt(ref).send({ from: accountss });
//            console.log('Buy result : -' + result);
//            if (result.transactionHash) {
//                alert('Invesmtent Successfully ');
//                // var url = "/SmartDashboard/Success1?userIDdd=" + USERID12 + "&amount=" + x + "&txthash=" + result.transactionHash;
//                // window.location.href = url;
//            }
//            else { alert('Invesmtent failed' + result); }
//        }
//    }


//}



async function login() {
    debugger
    const accountss = await getCurrentAccount();
    var url = "/Home/Login?USERADDRESS=" + accountss;
    window.location.href = url;

    //window.mxgfcontract = await new window.web3.eth.Contract(StakingnmatrixAbi, stakingaddress);
    //const userstatus = await window.mxgfcontract.methods.userInfos(accountss).call({ from: accountss });
    //if (!userstatus.id) {
    //    // alert(userstatus);
    //    console.log(userstatus);
    //} else {
    //    console.log(userstatus + ' address');
    //    console.log(accountss + ' add');
    //    //alert(result[0]);
    //    //alert(result[1]);
    //    //alert(web3.eth.accounts[0]);
    //    // if (result[0] == true) {
    //    if (userstatus.joined == true) {
    //        //alert('Welcome to EZY ETH Smart Contract')
    //        //alert(result[1]);
    //        //alert(web3.eth.accounts[0]);
    //        console.log(accountss + ' address entered ');
    //        // localStorage.setItem("loginaddress", web3.eth.accounts[0]);

    //        //const users = await window.mxgfcontract.methods.userInfos(accountss).call({ from: accountss });//, function (error, result) {
    //        //if (users.id) {
    //        //console.log(result + ' address');

    //        $("#showbuttonAuth").css('display', 'block');
    //        //location.href = "/Dashboard/Index";
    //        var url = "/Home/Login?userIDdd=" + userstatus.id;
    //        window.location.href = url;
    //        //  }
    //        // });

    //    } else {
    //        alert("you're not a registered user, please register");
    //    }

    //}
    //});
}

function login1() {
    window.EYZcontract.users(web3.eth.accounts[0], function (error, result) {
        if (error) {
            //alert(result);
            console.log(error);
        } else {
            console.log(result + ' address');
            console.log(web3.eth.accounts[0] + ' add');
            //alert(result[0]);
            //alert(result[1]);
            //alert(web3.eth.accounts[0]);
            // if (result[0] == true) {
            if (result == true) {
                //alert('Welcome to EZY ETH Smart Contract')
                //alert(result[1]);
                //alert(web3.eth.accounts[0]);
                console.log(web3.eth.accounts[0] + ' address entered ');
                // localStorage.setItem("loginaddress", web3.eth.accounts[0]);

                window.EYZcontract.users(web3.eth.accounts[0], function (error, result) {

                    console.log(result + ' address');

                    //location.href = "/Dashboard/Index";
                    var url = "/Home/Login?userIDdd=" + web3.eth.accounts[0];
                    window.location.href = url;
                });

            } else {
                alert("you're not a registered user, please register");
            }

        }
    });
}


function loginwithID(userid) {

    if (userid.length < 8 && userid.length > 0) {

        console.log('login without metamask');
        console.log(userid);
        //var json = {"userid": userid };
        var url = "/Home/Login?userIDdd=" + userid;
        window.location.href = url;


    }
    else if (userid.length > 8 && userid.length < 64) {
        console.log('login without metamask');
        console.log(userid);
        //var json = {"userid": userid };
        var url = "/Home/Login?USERADDRESS=" + userid;
        $("#showbutton").css('display', 'block');
        $("#Hide").css('display', 'none');
        window.location.href = url;
    }
    else
    if (userid.length < 8 && userid.length > 0) {
        window.EYZcontract.userAddressByID(userid, function (error, result2) {
            if (error) {
                console.log(error);
            } else {
                if (result2 != "0x0000000000000000000000000000000000000000") {

                    localStorage.setItem("loginaddress", result2);
                    //location.href = "/Dashboard/Index";
                    //var url = "/Home2/SignIn1?userIDdd=" + result2;
                    var url = "/Home/SignIn?userIDdd=" + result2;
                    window.location.href = url;
                }
                else {
                    alert('you are not a registered user, please register')

                }
            }
        });
    }
    else {

        window.EYZcontract.userInfos(userid, function (error, result) {

            if (error) {
                console.log(error);

            } else {

                if (result[0] == true) {

                    //localStorage.setItem("loginaddress", userid);
                    localStorage.setItem("loginaddress", result[1]);
                    //location.href = "/Dashboard/Index";
                    //var url = "/Home2/SignIn?userIDdd=" + result[1];
                    var url = "/Home/SignIn?userIDdd=" + result[1];
                    window.location.href = url;

                } else {
                    alert("Please enter valid ID or Address");
                }

            }
        });

    }


}
