const calculateBtn = document.getElementById('calculate-btn');
const ovulationDateDiv = document.querySelector('.ovulation-date');
const nextPeriodDateDiv = document.querySelector('.next-period-date');

calculateBtn.addEventListener('click', () => {
  const lastPeriodDate = new Date(document.getElementById('last-period-date').value);
  const cycleLength = parseInt(document.getElementById('cycle-length').value);
  
  // Calculate the ovulation date
  const ovulationDate = new Date(lastPeriodDate.getTime() + (cycleLength - 14) * 24 * 60 * 60 * 1000);
  const ovulationDateFormatted = ovulationDate.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' });
  
  // Calculate the next period date
  const nextPeriodDate = new Date(lastPeriodDate.getTime() + cycleLength * 24 * 60 * 60 * 1000);
  const nextPeriodDateFormatted = nextPeriodDate.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' });
  
  // Update the ovulation date and next period date displays
  ovulationDateDiv.textContent = ovulationDateFormatted;
  nextPeriodDateDiv.textContent = nextPeriodDateFormatted;
});
