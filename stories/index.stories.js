import { document, console } from 'global';
import { storiesOf } from '@storybook/html';
import { text, boolean, number } from '@storybook/addon-knobs';

const stories = storiesOf('Storybook Knobs', module);

stories.addDecorator(withKnobs)
  .add('heading', () => {
    const hello = '<h1>hellow</h1>';
    return hello;
  })
  .add('button', () => {
    const button = document.createElement('button');
    button.type = 'button';
    button.innerText = 'Hello Button';
    button.className = text('class', 'btn-danger');
    button.disabled = boolean('disabled', false);
    button.addEventListener('click', e => console.log(e));
    return button;
  });
