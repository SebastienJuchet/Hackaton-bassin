const vitesse = [
    '0-4 km/h',
    '4-7 km/h',
    '7-9 km/h',
    '9-12 km/h',
    '12-16 km/h',
    '+16 km/h'
]
const level = document.getElementById('level');

const valueLevel = document.getElementById('value-level');
level.addEventListener('change', () => {
    valueLevel.innerHTML = vitesse[level.value]
})
