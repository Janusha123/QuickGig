function createCards(cardCount, cardTexts, bgColors, numbers, height, width) {

    const cards = document.getElementById('cards');
    cards.innerHTML = '';

    for (let i = 0; i < cardCount; i++) {
        cards.innerHTML += 
        `
            <div style="background-color: ${colors[i]}; 
                            display: flex; 
                            width: ${width}px; 
                            height: ${height}px;
                            margin : ${10}px;
                            margin-top : ${50}px;
                            justify-content : center;
                            color: #ffffff";>
                <div class="amount">${numbers[i]}</div>
                <div class="text">${cardTexts[i]}</div>
            </div>
        `
    }
}


/*creates a number of cards*/