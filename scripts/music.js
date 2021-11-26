// tous les titres présent dans le dossier
const speeds = [
    [
        0,
        3.9,
    ],
    [
        4,
        6.9,
    ],
    [
        7,
        8.9,
    ],
    [
        9,
        11.9,
    ],
    [
        12,
        15.9,
    ],
    [
        16,
        40,
    ],
]

const musics = [
    [
        'chris-isaak-wicked-game-hd',
        'fake-plastic-trees',
        'intro',
        'la-valse-damelie-version-piano',
        'rem-everybody-hurts',
    ],
    [
        'air-sexy-boy-official-video',
        'arctic-monkeys-do-i-wanna-know-official-video',
        'college-electric-youth-a-real-hero',
        'fugees-the-score',
        'no-ceiling',
        'simon-and-garfunkel-the-sound-of-silence',
    ],
    [
        'creedence-clearwater-revival-fortunate-son',
        'hard-sun',
        'magic-edit',
        'the-message',
    ],
    [
        'bakermat-baby',
        'bon-entendeur-vs-david-christie-saddle-up',
        'queens-of-the-stone-age-make-it-wit-chu',
        'still-dre',
        'whyd-you-only-call-me-when-youre-high-arctic-monkeys',
    ],
    [
        'bleed-it-out-linkin-park',
        'rage-against-the-machine-killing-in-the-name-official-music-video',
        'uppermost-flashback',
    ],
    [
        'beastie-boys-sabotage',
        'blink-182-all-the-small-things-hq',
        'blur-song-2-hd',
        'cours-vite-2020-remaster',
        'john-scatman-im-a-scatman-ski-ba-bop-ba-dop-bop',
        'the-bloody-beetroots-rocksteady',
        'the-prodigy-smack-my-bitch-up',
        'vitalic-poney-part-1',
        'vitalic-second-lives',
    ],
]
const audio = document.getElementById('audio')
function autoplayer(arraymusics, level) {
       audio.src = 'Music/' + level + '/' + arraymusics[0] + '.mp3'
    audio.play()
}

const button = document.getElementById('button')
button.addEventListener('click', () => {
    autoplayer(musics[0], '0-4')
})








