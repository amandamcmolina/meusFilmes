// $(function () {
//     $("#teste_autoComplete").autocomplete({
//         source: ["Amanda", "Maria", "Costa", "Molina"],
//         minLength: 2
//     });
// });

var tagContainer = document.querySelector('.tag-container');

var input = document.querySelector('.tag-container input');
var tags = []; // [oi, oi, java]

function createTag(label) {
    var div = document.createElement('div');
    div.setAttribute('class', 'tag');
    var span = document.createElement('span');
    span.innerHTML = label;
    var closeBtn = document.createElement('i');
    closeBtn.setAttribute('class', 'material-icons');
    closeBtn.setAttribute('data-item', label);
    closeBtn.innerHTML = 'close';

    div.appendChild(span);
    div.appendChild(closeBtn);
    return div;
}

function reset() {
    document.querySelectorAll('.tag').forEach(function (tag) {
        tag.parentElement.removeChild(tag);
    });
};

function addTags() {
    reset();
    tags.slice().reverse().forEach(function (tag) {
        var input = createTag(tag);
        tagContainer.prepend(input);
    });
}

var upActors = function (e) {
    if (e.key == 'Enter') {
        tags.push(input.value);
        addTags();
        input.value = '';
    }
};

input.addEventListener("keyup", upActors);


document.addEventListener('click', function (e) {
    
    if (e.target.tagName == 'I') {
        const tagLabel = e.target.getAttribute('data-item');
        const index = tags.indexOf(tagLabel);
        tags = [...tags.slice(0, index), ...tags.slice(index + 1)];
        addTags();
    }
})

