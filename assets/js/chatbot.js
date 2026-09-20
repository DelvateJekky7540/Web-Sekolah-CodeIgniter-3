(function () {
    
    "use strict";

    /* =========================
       CSS CHATBOT
    ========================= */

    const css = `
        #school-ai-widget {
            position: fixed !important;
            right: 24px !important;
            bottom: 24px !important;
            width: auto !important;
            height: auto !important;
            margin: 0 !important;
            padding: 0 !important;
            z-index: 2147483647 !important;
            font-family: Arial, Helvetica, sans-serif !important;
        }

        #school-ai-widget *,
        #school-ai-widget *::before,
        #school-ai-widget *::after {
            box-sizing: border-box !important;
        }

        /* TOMBOL CHAT */

        #school-ai-widget .ai-button {
            width: 60px !important;
            height: 60px !important;

            position: relative !important;

            display: flex !important;
            align-items: center !important;
            justify-content: center !important;

            padding: 0 !important;
            margin: 0 !important;

            border: none !important;
            border-radius: 50% !important;

            background: #1769D1 !important;
            color: white !important;

            cursor: pointer !important;

            box-shadow:
                0 8px 25px rgba(23, 105, 209, 0.35) !important;

            outline: none !important;

            opacity: 1 !important;
            visibility: visible !important;
        }

        #school-ai-widget .ai-button:hover {
            background: #1259B4 !important;
            transform: translateY(-2px) !important;
        }

        #school-ai-widget .ai-button svg {
            width: 30px !important;
            height: 30px !important;

            display: block !important;

            margin: 0 !important;
            padding: 0 !important;

            color: white !important;
            stroke: white !important;
        }

        /* POPUP */

        #school-ai-widget .ai-popup {
            position: absolute !important;

            right: 0 !important;
            bottom: 75px !important;

            width: 360px !important;
            height: 520px !important;

            display: none !important;
            flex-direction: column !important;

            background: white !important;

            border-radius: 14px !important;

            overflow: hidden !important;

            border: 1px solid #e5e7eb !important;

            box-shadow:
                0 15px 45px rgba(0, 0, 0, 0.18) !important;
        }

        #school-ai-widget .ai-popup.open {
            display: flex !important;
        }

        /* HEADER */

        #school-ai-widget .ai-header {
            height: 64px !important;

            flex-shrink: 0 !important;

            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;

            padding: 12px 15px !important;

            background: #1769D1 !important;
            color: white !important;
        }

        #school-ai-widget .ai-header-title {
            display: flex !important;
            align-items: center !important;
            gap: 10px !important;
        }

        #school-ai-widget .ai-header-icon {
            width: 38px !important;
            height: 38px !important;

            display: flex !important;
            align-items: center !important;
            justify-content: center !important;

            border-radius: 9px !important;

            background: rgba(255,255,255,.15) !important;
        }

        #school-ai-widget .ai-header-icon svg {
            width: 21px !important;
            height: 21px !important;

            color: white !important;
            stroke: white !important;
        }

        #school-ai-widget .ai-name {
            font-size: 15px !important;
            font-weight: 600 !important;
            color: white !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        #school-ai-widget .ai-status {
            font-size: 10px !important;
            color: rgba(255,255,255,.8) !important;
            margin-top: 2px !important;
        }

        /* CLOSE */

        #school-ai-widget .ai-close {
            width: 32px !important;
            height: 32px !important;

            display: flex !important;
            align-items: center !important;
            justify-content: center !important;

            border: none !important;
            border-radius: 6px !important;

            padding: 0 !important;
            margin: 0 !important;

            background: transparent !important;

            color: white !important;

            cursor: pointer !important;
        }

        #school-ai-widget .ai-close:hover {
            background: rgba(255,255,255,.15) !important;
        }

        #school-ai-widget .ai-close svg {
            width: 19px !important;
            height: 19px !important;
        }

        /* MESSAGES */

        #school-ai-widget .ai-messages {
            flex: 1 !important;

            min-height: 0 !important;

            padding: 15px !important;

            overflow-y: auto !important;

            background: #f7f9fc !important;
        }

        #school-ai-widget .ai-welcome {
            text-align: center !important;

            padding: 30px 15px !important;

            color: #64748b !important;

            font-size: 12px !important;

            line-height: 1.6 !important;
        }

        #school-ai-widget .ai-welcome strong {
            display: block !important;

            margin-bottom: 4px !important;

            color: #1e293b !important;
        }

        /* MESSAGE */

        #school-ai-widget .ai-row {
            display: flex !important;

            margin-bottom: 10px !important;

            padding: 0 !important;
        }

        #school-ai-widget .ai-user {
            justify-content: flex-end !important;
        }

        #school-ai-widget .ai-bot {
            justify-content: flex-start !important;
        }

        #school-ai-widget .ai-message {
            max-width: 78% !important;

            padding: 9px 12px !important;

            border-radius: 10px !important;

            font-size: 12px !important;

            line-height: 1.5 !important;

            word-break: break-word !important;
        }

        #school-ai-widget .ai-user .ai-message {
            background: #1769D1 !important;
            color: white !important;
        }

        #school-ai-widget .ai-bot .ai-message {
            background: white !important;
            color: #334155 !important;

            border: 1px solid #e2e8f0 !important;
        }

        /* INPUT */

        #school-ai-widget .ai-input-area {
            flex-shrink: 0 !important;

            padding: 11px !important;

            background: white !important;

            border-top: 1px solid #e5e7eb !important;
        }

        #school-ai-widget .ai-input-row {
            display: flex !important;

            gap: 7px !important;

            align-items: center !important;
        }

        #school-ai-widget .ai-input {
            flex: 1 !important;

            min-width: 0 !important;

            height: 40px !important;

            padding: 8px 11px !important;

            margin: 0 !important;

            border: 1px solid #d1d5db !important;

            border-radius: 7px !important;

            background: white !important;

            color: #1e293b !important;

            outline: none !important;

            font-size: 12px !important;
        }

        #school-ai-widget .ai-input:focus {
            border-color: #1769D1 !important;
        }

        #school-ai-widget .ai-send {
            width: 40px !important;
            height: 40px !important;

            flex-shrink: 0 !important;

            display: flex !important;
            align-items: center !important;
            justify-content: center !important;

            padding: 0 !important;
            margin: 0 !important;

            border: none !important;
            border-radius: 7px !important;

            background: #1769D1 !important;

            color: white !important;

            cursor: pointer !important;
        }

        #school-ai-widget .ai-send svg {
            width: 18px !important;
            height: 18px !important;
        }

        /* MOBILE */

        @media (max-width: 600px) {

            #school-ai-widget {
                right: 15px !important;
                bottom: 15px !important;
            }

            #school-ai-widget .ai-button {
                width: 55px !important;
                height: 55px !important;
            }

            #school-ai-widget .ai-popup {
                position: fixed !important;

                left: 10px !important;
                right: 10px !important;
                bottom: 75px !important;

                width: auto !important;

                height: calc(100vh - 100px) !important;
                max-height: 600px !important;
            }
        }
    `;

    const style = document.createElement("style");
    style.id = "school-ai-style";
    style.textContent = css;

    document.head.appendChild(style);


    /* =====================================================
       CREATE WIDGET
    ===================================================== */

    const widget = document.createElement("div");

    widget.id = "school-ai-widget";

    widget.innerHTML = `

        <button
            type="button"
            class="ai-button"
            aria-label="Buka chatbot"
        >

            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="1.8"
            >

                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="
                        M8 10h.01
                        M12 10h.01
                        M16 10h.01
                        M9 16H5
                        a2 2 0 01-2-2V6
                        a2 2 0 012-2h14
                        a2 2 0 012 2v8
                        a2 2 0 01-2 2h-5
                        l-5 5v-5z
                    "
                />

            </svg>

        </button>


        <div class="ai-popup">

            <div class="ai-header">

                <div class="ai-header-title">

                    <div class="ai-header-icon">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="
                                    M9.75 17
                                    L9 20
                                    H15
                                    L14.25 17
                                    M5 3
                                    H19
                                    A2 2 0 0121 5
                                    V13
                                    A2 2 0 0119 15
                                    H5
                                    A2 2 0 013 13
                                    V5
                                    A2 2 0 015 3Z
                                "
                            />

                        </svg>

                    </div>


                    <div>

                        <div class="ai-name">
                            Skanda AI
                        </div>

                        <div class="ai-status">
                            Asisten sekolah
                        </div>

                    </div>

                </div>


                <button
                    type="button"
                    class="ai-close"
                    aria-label="Tutup chatbot"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="
                                M6 18L18 6
                                M6 6l12 12
                            "
                        />

                    </svg>

                </button>

            </div>


            <div class="ai-messages">

                <div class="ai-welcome">

                    <strong>
                        Halo! 👋
                    </strong>

                    Saya Skanda AI.
                    <br>

                    Ada yang bisa saya bantu?

                </div>

            </div>


            <div class="ai-input-area">

                <div class="ai-input-row">

                    <input
                        type="text"
                        class="ai-input"
                        placeholder="Tulis pertanyaan..."
                        autocomplete="off"
                    >

                    <button
                        type="button"
                        class="ai-send"
                        aria-label="Kirim"
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="
                                    M5 12h14
                                    M13 6l6 6-6 6
                                "
                            />

                        </svg>

                    </button>

                </div>

            </div>

        </div>
    `;


    document.body.appendChild(widget);


    /* =====================================================
       ELEMENT
    ===================================================== */

    const button =
        widget.querySelector(".ai-button");

    const popup =
        widget.querySelector(".ai-popup");

    const close =
        widget.querySelector(".ai-close");

    const input =
        widget.querySelector(".ai-input");

    const send =
        widget.querySelector(".ai-send");

    const messages =
        widget.querySelector(".ai-messages");


    /* =====================================================
       OPEN
    ===================================================== */

    button.addEventListener(
        "click",
        function () {

            popup.classList.toggle("open");

            if (popup.classList.contains("open")) {

                setTimeout(function () {
                    input.focus();
                }, 100);

            }

        }
    );


    /* =====================================================
       CLOSE
    ===================================================== */

    close.addEventListener(
        "click",
        function () {

            popup.classList.remove("open");

        }
    );


    /* =====================================================
       MESSAGE
    ===================================================== */

    function addMessage(text, user) {

        const row =
            document.createElement("div");

        row.className =
            user
                ? "ai-row ai-user"
                : "ai-row ai-bot";


        const message =
            document.createElement("div");

        message.className =
            "ai-message";


        message.textContent = text;


        row.appendChild(message);

        messages.appendChild(row);


        messages.scrollTop =
            messages.scrollHeight;

    }


    /* =====================================================
       SEND
    ===================================================== */

    async function sendMessage() {

        const text =
            input.value.trim();


        if (!text) {
            return;
        }


        input.value = "";


        addMessage(text, true);


        /*
         * Pastikan variabel CHATBOT_API_URL
         * sudah dibuat di view PHP.
         */

        if (
            typeof CHATBOT_API_URL ===
            "undefined"
        ) {

            addMessage(
                "Endpoint chatbot belum dikonfigurasi.",
                false
            );

            return;
        }


        try {

            const response =
                await fetch(
                    CHATBOT_API_URL,
                    {
                        method: "POST",

                        headers: {
                            "Content-Type":
                                "application/json"
                        },

                        body:
                            JSON.stringify({
                                message: text
                            })
                    }
                );


            const data =
                await response.json();


            if (
                data.success &&
                data.answer
            ) {

                addMessage(
                    data.answer,
                    false
                );

            } else {

                addMessage(
                    data.message ||
                    "Maaf, terjadi kesalahan.",
                    false
                );

            }

        } catch (error) {

            console.error(error);

            addMessage(
                "Maaf, chatbot tidak dapat terhubung ke server.",
                false
            );

        }

    }


    /* =====================================================
       SEND BUTTON
    ===================================================== */

    send.addEventListener(
        "click",
        sendMessage
    );


    /* =====================================================
       ENTER
    ===================================================== */

    input.addEventListener(
        "keydown",
        function (event) {

            if (
                event.key === "Enter"
            ) {

                event.preventDefault();

                sendMessage();

            }

        }
    );

})();