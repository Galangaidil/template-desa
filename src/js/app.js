import {getDataPerangkatDesa} from './datasource.js';

// get all elements with data-collapse-toggle attribute
const triggerElements = document.querySelectorAll('[data-collapse-toggle]');

// loop through all elements and add click event listener
triggerElements.forEach((triggerElement) => {
    triggerElement.addEventListener('click', () => {
        const collapseId = triggerElement.dataset.collapseToggle;
        const collapseElement = document.getElementById(collapseId);
        collapseElement.classList.toggle('hidden');
    });
});

// get data from datasource
const dataPerangkatDesa = await getDataPerangkatDesa('14.09.08.2011');

// initialize diagram component
const items = new ej.data.DataManager(dataPerangkatDesa);

const diagram = new ej.diagrams.Diagram({
    width: '100%', height: '500px',
    dataSourceSettings: {
        // set the unique field from data source
        id: 'id',
        // set the field which is used to identify the reporting person
        parentId: 'manager',
        // define the employee data
        dataManager: items
    },
    layout: {
        // set the layout type
        type: 'OrganizationalChart',
    },
    getConnectorDefaults: connectorDefaults,
    setNodeTemplate: setNodeTemplate,
    // hide the gridlines in the diagram
    snapSettings: {constraints: ej.diagrams.SnapConstraints.None}
});

diagram.appendTo('#diagram');

//Define the common settings for connectors.
function connectorDefaults(connector) {
    connector.targetDecorator.shape = 'None';
    connector.type = 'Orthogonal';
    connector.style.strokeColor = 'gray';
    return connector;
}

//Funtion to add the Template of the Node.
function setNodeTemplate(obj) {
    // create the stack panel
    const content = new ej.diagrams.StackPanel();
    content.id = obj.id + '_outerstack';
    content.orientation = 'Horizontal';
    content.style.strokeColor = 'gray';
    content.padding = {left: 5, right: 10, top: 5, bottom: 5};

    // create the image element to map the image data from the data source
    const image = new ej.diagrams.ImageElement();
    image.id = obj.id + '_pic';
    image.width = 50;
    image.height = 50;
    image.style.strokeColor = 'none';
    image.source = obj.data.imageUrl;

    // create the stack panel to append the text elements.
    const innerStack = new ej.diagrams.StackPanel();
    innerStack.style.strokeColor = 'none';
    innerStack.margin = {left: 5, right: 0, top: 0, bottom: 0};
    innerStack.id = obj.id + '_innerstack';

    // create the text element to map the name data from the data source
    const text = new ej.diagrams.TextElement();
    text.style.bold = true;
    text.id = obj.id + '_name';
    text.content = obj.data.name;

    // create the text element to map the role data from the data source
    const desigText = new ej.diagrams.TextElement();
    desigText.id = obj.id + '_desig';
    desigText.content = obj.data.role;

    // append the text elements
    innerStack.children = [text, desigText];

    // append the image and inner stack elements
    content.children = [image, innerStack];
    return content;
}

// dark mode
// On page load or when changing themes, best to add inline in `head` to avoid FOUC
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
} else {
    document.documentElement.classList.remove('dark')
}

const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

const themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

        // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }

});