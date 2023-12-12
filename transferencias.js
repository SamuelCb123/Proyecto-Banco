"use strict";

function convertCurrency(currency) {
    const amountInUSD = parseFloat(prompt('Enter the amount in USD:'));
    
    if (!isNaN(amountInUSD)) {
        const convertedAmount = amountInUSD * getExchangeRate(currency);
        document.getElementById('convertedAmount').innerText = `Converted Amount (${currency}): ${convertedAmount.toFixed(2)}`;
    } else {
        alert('Please enter a valid number for the amount.');
    }
}

function getExchangeRate(currency) {
    const exchangeRates = {
        'Euro': 1.12,
        'Libra': 1.31,
        'Dólar': 1.00,
        'Yen': 0.0091,
        'Rublo': 0.014
    };

    return exchangeRates[currency];
}