const audio = document.getElementById('audio')
function autoplayer(arraymusics, level) {
       audio.src = 'Music/' + level + '/' + arraymusics[0] + '.mp3'
    audio.play()
}

const button = document.getElementById('button')
button.addEventListener('click', () => {
    autoplayer(musics[level.value], speeds[level.value][2])
})








