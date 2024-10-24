import './bootstrap';
import 'flowbite';
import './wysiwyg-editor';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


require('./bootstrap');

// Add this line to include SortableJS
import Sortable from 'sortablejs';

// Initialize SortableJS on DOMContentLoaded
document.addEventListener('DOMContentLoaded', function () {
    const columns = document.querySelectorAll('.tasks');
    columns.forEach((column) => {
        new Sortable(column, {
            group: 'shared', // set both lists to same group
            animation: 150,
            onEnd: function (evt) {
                const taskId = evt.item.dataset.taskId;
                const newColumnId = evt.to.closest('.column').dataset.columnId;

                fetch(`/tasks/${taskId}/move`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                    body: JSON.stringify({
                        column_id: newColumnId,
                    }),
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            console.log('Task moved successfully');
                        } else {
                            console.error('Failed to move task');
                        }
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                    });
            },
        });
    });
});
