import { Editor } from 'https://esm.sh/@tiptap/core@2.6.6';
import StarterKit from 'https://esm.sh/@tiptap/starter-kit@2.6.6';
import Highlight from 'https://esm.sh/@tiptap/extension-highlight@2.6.6';
import Underline from 'https://esm.sh/@tiptap/extension-underline@2.6.6';
import Link from 'https://esm.sh/@tiptap/extension-link@2.6.6';
import TextAlign from 'https://esm.sh/@tiptap/extension-text-align@2.6.6';
import HorizontalRule from 'https://esm.sh/@tiptap/extension-horizontal-rule@2.6.6';
import Image from 'https://esm.sh/@tiptap/extension-image@2.6.6';
import YouTube from 'https://esm.sh/@tiptap/extension-youtube@2.6.6';
import TextStyle from 'https://esm.sh/@tiptap/extension-text-style@2.6.6';
import FontFamily from 'https://esm.sh/@tiptap/extension-font-family@2.6.6';
import { Color } from 'https://esm.sh/@tiptap/extension-color@2.6.6';

window.addEventListener('load', function () {
    document.querySelectorAll('.wysiwyg-editor').forEach(editorContainer => {
        const name = editorContainer.id;
        const hiddenTextarea = document.getElementById(`${name}-hidden`);
        const initialContent = editorContainer.dataset.content || '<p>Start writing here...</p>';

        const FontSizeTextStyle = TextStyle.extend({
            addAttributes() {
                return {
                    fontSize: {
                        default: null,
                        parseHTML: element => element.style.fontSize,
                        renderHTML: attributes => {
                            if (!attributes.fontSize) {
                                return {};
                            }
                            return { style: 'font-size: ' + attributes.fontSize };
                        },
                    },
                };
            },
        });

        const editor = new Editor({
            element: editorContainer,
            extensions: [
                StarterKit,
                Highlight,
                Underline,
                Link.configure({
                    openOnClick: false,
                    autolink: true,
                    defaultProtocol: 'https',
                }),
                TextAlign.configure({
                    types: ['heading', 'paragraph'],
                }),
                HorizontalRule,
                Image,
                YouTube,
                TextStyle,
                FontSizeTextStyle,
                Color,
                FontFamily
            ],
            content: initialContent,
            editorProps: {
                attributes: {
                    class: 'format lg:format-lg dark:format-invert focus:outline-none format-blue max-w-none',
                },
            },
            onUpdate: ({ editor }) => {
                // Update hidden textarea whenever the editor content changes
                hiddenTextarea.value = editor.getHTML();
            }
        });
    });

    const setupButtonListener = (buttonId, action) => {
        const button = document.getElementById(buttonId);
        if (button) {
            button.addEventListener('click', action);
        }
    };

    // Set up event listeners for buttons
    setupButtonListener('toggleBoldButton', () => editor.chain().focus().toggleBold().run());
    setupButtonListener('toggleItalicButton', () => editor.chain().focus().toggleItalic().run());
    setupButtonListener('toggleUnderlineButton', () => editor.chain().focus().toggleUnderline().run());
    setupButtonListener('toggleStrikeButton', () => editor.chain().focus().toggleStrike().run());
    setupButtonListener('toggleHighlightButton', () => editor.chain().focus().toggleHighlight({ color: '#ffc078' }).run());

    setupButtonListener('toggleLinkButton', () => {
        const url = window.prompt('Enter URL:', 'https://example.com');
        if (url) {
            editor.chain().focus().toggleLink({ href: url }).run();
        }
    });

    setupButtonListener('removeLinkButton', () => editor.chain().focus().unsetLink().run());
    setupButtonListener('toggleCodeButton', () => editor.chain().focus().toggleCode().run());

    // Alignment buttons
    setupButtonListener('toggleLeftAlignButton', () => editor.chain().focus().setTextAlign('left').run());
    setupButtonListener('toggleCenterAlignButton', () => editor.chain().focus().setTextAlign('center').run());
    setupButtonListener('toggleRightAlignButton', () => editor.chain().focus().setTextAlign('right').run());

    // List and blockquote
    setupButtonListener('toggleListButton', () => editor.chain().focus().toggleBulletList().run());
    setupButtonListener('toggleOrderedListButton', () => editor.chain().focus().toggleOrderedList().run());
    setupButtonListener('toggleBlockquoteButton', () => editor.chain().focus().toggleBlockquote().run());
    setupButtonListener('toggleHRButton', () => editor.chain().focus().setHorizontalRule().run());

    // Image and video insertion
    setupButtonListener('addImageButton', () => {
        const url = window.prompt('Enter image URL:', 'https://placehold.co/600x400');
        if (url) {
            editor.chain().focus().setImage({ src: url }).run();
        }
    });

    setupButtonListener('addVideoButton', () => {
        const url = window.prompt('Enter YouTube URL:', 'https://www.youtube.com/watch?v=KaLxCiilHns');
        if (url) {
            editor.commands.setYoutubeVideo({ src: url, width: 640, height: 480 });
        }
    });

    // Handle text style changes
    document.querySelectorAll('[data-text-size]').forEach(button => {
        button.addEventListener('click', () => {
            const fontSize = button.getAttribute('data-text-size');
            editor.chain().focus().setMark('textStyle', { fontSize }).run();
        });
    });

    document.querySelectorAll('[data-hex-color]').forEach(button => {
        button.addEventListener('click', () => {
            const color = button.getAttribute('data-hex-color');
            editor.chain().focus().setColor(color).run();
        });
    });

    const colorPicker = document.getElementById('color');
    if (colorPicker) {
        colorPicker.addEventListener('input', event => {
            const color = event.target.value;
            editor.chain().focus().setColor(color).run();
        });
    }

    setupButtonListener('reset-color', () => editor.commands.unsetColor());

    // Font family dropdown
    document.querySelectorAll('[data-font-family]').forEach(button => {
        button.addEventListener('click', () => {
            const fontFamily = button.getAttribute('data-font-family');
            editor.chain().focus().setFontFamily(fontFamily).run();
        });
    });
});
