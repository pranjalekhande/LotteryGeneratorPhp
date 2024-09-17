document.addEventListener('DOMContentLoaded', () => {
    const generateBtn = document.getElementById('generate-btn');
    const numbers = document.querySelectorAll('.number span');
    const powerball = document.querySelector('.powerball span');
    const lotteryCard = document.getElementById('lottery-card');

    let previousNumbers = [];

    generateBtn.addEventListener('click', generateNumbers);

    async function generateNumbers() {
        try {
            const response = await fetch('/generate');
            const data = await response.json();

            let newNumbers = [...data.mainNumbers, data.powerball];

            
            while (newNumbers.some(num => previousNumbers.includes(num))) {
                const response = await fetch('/generate');
                const data = await response.json();
                newNumbers = [...data.mainNumbers, data.powerball];
            }

            previousNumbers = newNumbers;

            
            lotteryCard.style.display = 'block';

            
            numbers.forEach(number => {
                number.style.opacity = 0;
                number.textContent = '';
            });

            for (let i = 0; i < numbers.length; i++) {
                setTimeout(() => {
                    numbers[i].textContent = i < 5 ? data.mainNumbers[i] : data.powerball;
                    numbers[i].style.opacity = 1;
                }, i * 500); // 500ms delay between each number
            }

        } catch (error) {
            console.error('Error generating numbers:', error);
        }
    }
});
