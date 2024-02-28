import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import { initFlowbite } from 'flowbite'
import 'flowbite';

import * as components from './components'
import * as stores from './stores'

Alpine.store('darkMode', stores.darkMode)
Alpine.data('toast', components.toast)

document.addEventListener('livewire:navigated', initFlowbite)

Livewire.on('toast:show', components.toast().show)


Livewire.start()
