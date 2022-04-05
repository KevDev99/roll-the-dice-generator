


async function submitDiceData() {

  
  const _frmElement = document.getElementById('diceForm')
  const _numberOfRolls = document.getElementById('numberOfRolls');
  const _diceType = document.getElementById('diceType');

  // validate input (min 1 - max 100)
  if(_numberOfRolls.value < 1 || _numberOfRolls.value > 100) 
    return alert('Please select a value between 1 and 100 for the number of rolls');

 /*  if(!_diceType.value) {
    return alert('Please select a correct value of the "Type of dice" select box');
  } */

  // get form data and transform it to URLSearchParams
  const data = new URLSearchParams();
  for (const pair of new FormData(_frmElement)) {
    data.append(pair[0], pair[1]);
  }


  // send the post and get back the random dices as json
  const res = await fetch('dice.php', {
    method: 'post',
    body: data,
  })

  if(res.status !== 200) 
    return alert('There was an error, please check your input')
  
  const dicesData = await res.json();

  const _dicesRow = document.getElementById('dicesRow');
  // clear the current content of the dicesRow
  _dicesRow.innerHTML = '';

  // add all dices to the dicesRow
  dicesData.map(diceNumber => _dicesRow.appendChild(getDiceCol(diceNumber)))

  // needed to stop executing the post method on the form.
  return false;
}

function getDiceCol(number) {

  if(!number) return null;
  
  const _col = document.createElement('div');
  _col.classList.add('col');

  const _diceCard = document.createElement('div');
  _diceCard.classList.add('dice', 'card', 'mt-3');
  _diceCard.style.width = '10rem';
  _diceCard.style.height = '10rem';
  _diceCard.innerHTML = number;

  _col.appendChild(_diceCard)

  return _col;
}