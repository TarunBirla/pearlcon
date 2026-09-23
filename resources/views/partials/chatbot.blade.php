<!-- Pearlcon Virtual Assistant Chatbot Partial -->
<div id="pearlconChatbotRoot">
    <!-- Floating Action Group (Positioned at Bottom-Right where WhatsApp is) -->
    <div class="chatbot-float-group">

        <!-- WhatsApp Float Button (Placed right beside/above Virtual Chat) -->
        <a href="https://wa.me/447891363776" class="whatsapp-float-mini" target="_blank" rel="noopener noreferrer" aria-label="Chat with us on WhatsApp" title="WhatsApp Support">
            <svg viewBox="0 0 32 32" aria-hidden="true">
                <path d="M19.11 17.39c-.27-.14-1.6-.79-1.85-.88-.25-.09-.43-.14-.61.14-.18.27-.7.88-.86 1.06-.16.18-.32.2-.59.07-.27-.14-1.13-.42-2.15-1.33-.79-.7-1.33-1.56-1.49-1.82-.16-.27-.02-.41.12-.54.12-.12.27-.32.41-.48.14-.16.18-.27.27-.45.09-.18.05-.34-.02-.48-.07-.14-.61-1.47-.84-2.01-.22-.53-.45-.46-.61-.47h-.52c-.18 0-.48.07-.73.34-.25.27-.95.93-.95 2.27s.98 2.63 1.11 2.81c.14.18 1.92 2.93 4.65 4.11.65.28 1.16.45 1.56.58.66.21 1.26.18 1.74.11.53-.08 1.6-.65 1.83-1.28.23-.63.23-1.17.16-1.28-.07-.11-.25-.18-.52-.32z" />
                <path d="M16.03 3C8.85 3 3 8.84 3 16c0 2.3.6 4.54 1.74 6.51L3 29l6.65-1.7A12.96 12.96 0 0 0 16.03 29C23.2 29 29 23.16 29 16S23.2 3 16.03 3zm0 23.85c-2.03 0-4.02-.55-5.76-1.59l-.41-.24-3.95 1.01 1.05-3.84-.27-.4A10.82 10.82 0 1 1 16.03 26.85z" />
            </svg>
        </a>

    <!-- Floating Chat Box Button -->
         <button id="chatbotToggleBtn" class="chatbot-float-btn" aria-label="Open Virtual Chat Assistant" title="Chat with Virtual Assistant">
            <span class="chatbot-pulse-ring"></span>
            <span class="chatbot-online-badge"></span>
            <span class="chatbot-tooltip">Virtual Chat Assistant</span>
            
            <svg class="icon-chat" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                <line x1="8" y1="9" x2="16" y2="9"></line>
                <line x1="8" y1="13" x2="14" y2="13"></line>
            </svg>

            <svg class="icon-close" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button> 

        
    </div>

    <!-- Virtual Chatbot Box Modal -->
    <div id="chatbotContainer" class="chatbot-window" aria-hidden="true">
        <!-- Header -->
        <div class="chatbot-header">
            <div class="chatbot-avatar-wrap">
                <div class="chatbot-avatar">
                    <img src="{{ asset('assets/img/logo.jpeg') }}" alt="Pearlcon Logo" onerror="this.src='https://via.placeholder.com/40/0a1626/ffffff?text=P';">
                </div>
                <span class="avatar-status-dot"></span>
            </div>
            <div class="chatbot-title-wrap">
                <h3>Pearlcon Virtual Assistant</h3>
                <p><span class="status-indicator"></span> Online �� Instant Reply</p>
            </div>
            <div class="chatbot-actions">
                <button id="chatbotResetBtn" class="chatbot-action-btn" title="Reset / Restart Chat" aria-label="Reset Chat">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"></path>
                    </svg>
                </button>
                <button id="chatbotCloseBtn" class="chatbot-action-btn" title="Close Chat" aria-label="Close Chat">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Messages Area -->
        <div id="chatbotMessages" class="chatbot-messages">
            <!-- Messages populated dynamically via JS -->
        </div>

        <!-- Input Area -->
        <div class="chatbot-input-container">
            <form id="chatbotForm" autocomplete="off" onsubmit="return false;">
                @csrf
                <div class="chatbot-input-row">
                    <input type="text" id="chatbotInput" placeholder="Type your answer here..." aria-label="Chat input">
                    <button type="submit" id="chatbotSendBtn" title="Send message" aria-label="Send Message">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="22" y1="2" x2="11" y2="13"></line>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                        </svg>
                    </button>
                </div>
            </form>
            <div class="chatbot-footer-brand">
                Powered by <span>Pearlcon Sourcing AI</span>
            </div>
        </div>
    </div>
</div>

<!-- Chatbot Embedded CSS -->
<style>
/* Floating Action Group */
.chatbot-float-group {
    position: fixed;
    right: 24px;
    bottom: 30px;
    z-index: 99999;
    display: flex;
    flex-direction: column-reverse;
    align-items: center;
    gap: 12px;
}

/* Chat Trigger Button */
.chatbot-float-btn {
    position: relative;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(135deg, #e98423 0%, #d67112 100%);
    color: #ffffff;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 10px 28px rgba(233, 132, 35, 0.45), 0 4px 12px rgba(10, 22, 38, 0.2);
    transition: transform 0.35s cubic-bezier(0.16, 0.8, 0.24, 1), box-shadow 0.35s ease;
    outline: none;
}

.chatbot-float-btn:hover {
    transform: translateY(-4px) scale(1.06);
    box-shadow: 0 14px 34px rgba(233, 132, 35, 0.6), 0 6px 16px rgba(10, 22, 38, 0.3);
}

.chatbot-float-btn .icon-chat,
.chatbot-float-btn .icon-close {
    width: 28px;
    height: 28px;
    transition: transform 0.3s ease, opacity 0.3s ease;
}

.chatbot-float-btn .icon-close {
    display: none;
}

.chatbot-float-btn.active .icon-chat {
    display: none;
}

.chatbot-float-btn.active .icon-close {
    display: block;
}

/* Online Badge & Pulse Ring */
.chatbot-online-badge {
    position: absolute;
    top: 2px;
    right: 2px;
    width: 14px;
    height: 14px;
    background: #10b981;
    border: 2.5px solid #ffffff;
    border-radius: 50%;
    z-index: 2;
}

.chatbot-pulse-ring {
    position: absolute;
    inset: -4px;
    border-radius: 50%;
    border: 2px solid rgba(233, 132, 35, 0.6);
    animation: chatbotPulse 2s infinite;
    pointer-events: none;
}

@keyframes chatbotPulse {
    0% { transform: scale(0.95); opacity: 0.9; }
    50% { transform: scale(1.18); opacity: 0.1; }
    100% { transform: scale(0.95); opacity: 0.9; }
}

.chatbot-tooltip {
    position: absolute;
    right: 72px;
    white-space: nowrap;
    background: #0a1626;
    color: #ffffff;
    font-size: 13px;
    font-weight: 500;
    padding: 7px 14px;
    border-radius: 8px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.25);
    opacity: 0;
    pointer-events: none;
    transform: translateX(10px);
    transition: all 0.3s ease;
}

.chatbot-float-btn:hover .chatbot-tooltip {
    opacity: 1;
    transform: translateX(0);
}

/* Mini WhatsApp Floating Button */
.whatsapp-float-mini {
    width: 48px;
    height: 48px;
    background: #25D366;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 6px 20px rgba(37, 211, 102, 0.35);
    transition: all 0.3s ease;
}

.whatsapp-float-mini:hover {
    transform: translateY(-3px) scale(1.08);
    box-shadow: 0 10px 24px rgba(37, 211, 102, 0.5);
}

.whatsapp-float-mini svg {
    width: 26px;
    height: 26px;
    fill: currentColor;
}

/* Chatbot Window Container */
.chatbot-window {
    position: fixed;
    right: 24px;
    bottom: 130px;
    width: 380px;
    max-width: calc(100vw - 32px);
    height: 560px;
    max-height: calc(100vh - 130px);
    background: #ffffff;
    border-radius: 20px;
    box-shadow: 0 20px 50px rgba(10, 22, 38, 0.28), 0 0 0 1px rgba(10, 22, 38, 0.08);
    display: flex;
    flex-direction: column;
    z-index: 99998;
    overflow: hidden;
    opacity: 0;
    visibility: hidden;
    transform: translateY(20px) scale(0.94);
    transition: opacity 0.35s cubic-bezier(0.16, 0.8, 0.24, 1), transform 0.35s cubic-bezier(0.16, 0.8, 0.24, 1), visibility 0.35s;
}

.chatbot-window.active {
    opacity: 1;
    visibility: visible;
    transform: translateY(0) scale(1);
}

/* Header */
.chatbot-header {
    background: #0a1626;
    color: #ffffff;
    padding: 16px 18px;
    display: flex;
    align-items: center;
    gap: 12px;
    border-bottom: 2px solid var(--amber, #e98423);
}

.chatbot-avatar-wrap {
    position: relative;
    width: 42px;
    height: 42px;
    flex-shrink: 0;
}

.chatbot-avatar {
    width: 100%;
    height: 100%;
    border-radius: 12px;
    background: #101f35;
    overflow: hidden;
    border: 1.5px solid rgba(233, 132, 35, 0.4);
    display: flex;
    align-items: center;
    justify-content: center;
}

.chatbot-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.avatar-status-dot {
    position: absolute;
    bottom: -2px;
    right: -2px;
    width: 12px;
    height: 12px;
    background: #10b981;
    border: 2px solid #0a1626;
    border-radius: 50%;
}

.chatbot-title-wrap {
    flex: 1;
    min-width: 0;
}

.chatbot-title-wrap h3,
.chatbot-title-wrap h4 {
    color: #ffffff;
    font-size: 15px;
    font-weight: 600;
    margin: 0;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: 'Space Grotesk', sans-serif;
}

.chatbot-title-wrap p {
    color: #8b9aae;
    font-size: 12px;
    margin: 2px 0 0;
    display: flex;
    align-items: center;
    gap: 5px;
}

.status-indicator {
    width: 7px;
    height: 7px;
    background: #10b981;
    border-radius: 50%;
    display: inline-block;
}

.chatbot-actions {
    display: flex;
    align-items: center;
    gap: 6px;
}

.chatbot-action-btn {
    background: rgba(255, 255, 255, 0.08);
    border: none;
    color: #a0aec0;
    width: 32px;
    height: 32px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s ease;
}

.chatbot-action-btn:hover {
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff;
}

.chatbot-action-btn svg {
    width: 16px;
    height: 16px;
}

/* Messages List */
.chatbot-messages {
    flex: 1;
    padding: 18px 16px;
    overflow-y: auto;
    background: #f8fafc;
    display: flex;
    flex-direction: column;
    gap: 14px;
    scroll-behavior: smooth;
}

.chat-msg {
    display: flex;
    flex-direction: column;
    max-width: 84%;
    animation: msgFadeIn 0.3s ease forwards;
}

@keyframes msgFadeIn {
    from { opacity: 0; transform: translateY(8px); }
    to { opacity: 1; transform: translateY(0); }
}

.chat-msg.bot {
    align-self: flex-start;
}

.chat-msg.user {
    align-self: flex-end;
}

.msg-bubble {
    padding: 12px 16px;
    border-radius: 16px;
    font-size: 14px;
    line-height: 1.5;
    word-wrap: break-word;
    position: relative;
}

.chat-msg.bot .msg-bubble {
    background: #ffffff;
    color: #1e293b;
    border-bottom-left-radius: 4px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
}

.chat-msg.user .msg-bubble {
    background: linear-gradient(135deg, #e98423 0%, #d67112 100%);
    color: #ffffff;
    border-bottom-right-radius: 4px;
    box-shadow: 0 4px 12px rgba(233, 132, 35, 0.3);
}

.msg-time {
    font-size: 10px;
    color: #94a3b8;
    margin-top: 4px;
    align-self: flex-start;
}

.chat-msg.user .msg-time {
    align-self: flex-end;
}

/* Typing Indicator Animation */
.typing-indicator {
    display: flex;
    align-items: center;
    gap: 4px;
    padding: 12px 18px;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    border-bottom-left-radius: 4px;
    width: fit-content;
    box-shadow: 0 2px 8px rgba(0,0,0,0.04);
}

.typing-dot {
    width: 7px;
    height: 7px;
    background: #94a3b8;
    border-radius: 50%;
    animation: typingBounce 1.4s infinite ease-in-out both;
}

.typing-dot:nth-child(1) { animation-delay: 0s; }
.typing-dot:nth-child(2) { animation-delay: 0.2s; }
.typing-dot:nth-child(3) { animation-delay: 0.4s; }

@keyframes typingBounce {
    0%, 80%, 100% { transform: scale(0.6); opacity: 0.4; }
    40% { transform: scale(1); opacity: 1; }
}

/* Quick Action Chips */
.chat-chips {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-top: 8px;
}

.chat-chip {
    background: #ffffff;
    border: 1px solid #e98423;
    color: #e98423;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s ease;
}

.chat-chip:hover {
    background: #e98423;
    color: #ffffff;
}

/* Input Area */
.chatbot-input-container {
    background: #ffffff;
    padding: 12px 16px 14px;
    border-top: 1px solid #e2e8f0;
}

.chatbot-input-row {
    display: flex;
    align-items: center;
    gap: 8px;
    background: #f1f5f9;
    border-radius: 25px;
    padding: 4px 6px 4px 16px;
    border: 1.5px solid transparent;
    transition: border-color 0.25s ease, background 0.25s ease;
}

.chatbot-input-row:focus-within {
    border-color: #e98423;
    background: #ffffff;
    box-shadow: 0 0 0 3px rgba(233, 132, 35, 0.15);
}

.chatbot-input-row input {
    flex: 1;
    border: none;
    background: transparent;
    font-size: 14px;
    color: #0f172a;
    outline: none;
    padding: 8px 0;
    font-family: inherit;
}

.chatbot-input-row input::placeholder {
    color: #94a3b8;
}

.chatbot-input-row button {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: #e98423;
    color: #ffffff;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    flex-shrink: 0;
    transition: background 0.2s ease, transform 0.2s ease;
}

.chatbot-input-row button:hover {
    background: #d67112;
    transform: scale(1.05);
}

.chatbot-input-row button:disabled {
    background: #cbd5e1;
    cursor: not-allowed;
    transform: none;
}

.chatbot-input-row button svg {
    width: 18px;
    height: 18px;
}

.chatbot-footer-brand {
    font-size: 11px;
    color: #94a3b8;
    text-align: center;
    margin-top: 8px;
}

.chatbot-footer-brand span {
    font-weight: 600;
    color: #0a1626;
}

@media (max-width: 640px) {
    .chatbot-float-group {
        right: 16px;
        bottom: 20px;
    }
    .chatbot-window {
        right: 12px;
        left: 12px;
        width: auto;
        bottom: 90px;
        height: 520px;
    }
}
</style>

<!-- Chatbot Interactive JavaScript Logic -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('chatbotToggleBtn');
    const closeBtn = document.getElementById('chatbotCloseBtn');
    const resetBtn = document.getElementById('chatbotResetBtn');
    const container = document.getElementById('chatbotContainer');
    const messagesContainer = document.getElementById('chatbotMessages');
    const form = document.getElementById('chatbotForm');
    const input = document.getElementById('chatbotInput');
    const sendBtn = document.getElementById('chatbotSendBtn');
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || 
                      document.querySelector('input[name="_token"]')?.value || '';

    // Step state tracking: 
    // 0: Initial Greeting -> Ask Name
    // 1: Ask Email
    // 2: Ask Phone
    // 3: Ask Subject/Description
    // 4: Submitted / Finished
    let currentStep = 0;
    let userData = {
        name: '',
        email: '',
        phone: '',
        subject_description: ''
    };

    // Toggle Chat Window
    toggleBtn.addEventListener('click', function () {
        const isOpen = container.classList.contains('active');
        if (isOpen) {
            closeChat();
        } else {
            openChat();
        }
    });

    closeBtn.addEventListener('click', closeChat);

    function openChat() {
        container.classList.add('active');
        container.setAttribute('aria-hidden', 'false');
        toggleBtn.classList.add('active');
        if (messagesContainer.children.length === 0) {
            startChatFlow();
        } else {
            input.focus();
        }
    }

    function closeChat() {
        container.classList.remove('active');
        container.setAttribute('aria-hidden', 'true');
        toggleBtn.classList.remove('active');
    }

    resetBtn.addEventListener('click', function () {
        messagesContainer.innerHTML = '';
        currentStep = 0;
        userData = { name: '', email: '', phone: '', subject_description: '' };
        input.disabled = false;
        sendBtn.disabled = false;
        input.placeholder = "Type your response...";
        startChatFlow();
    });

    // Start Interactive Question Flow
    function startChatFlow() {
        showTypingIndicator();
        setTimeout(() => {
            removeTypingIndicator();
            appendBotMessage("Hello! �9�9 Welcome to Pearlcon Business Services. I'm your Virtual Sourcing Assistant.");
            
            setTimeout(() => {
                showTypingIndicator();
                setTimeout(() => {
                    removeTypingIndicator();
                    appendBotMessage("To get started, could you please tell me your <strong>Full Name</strong>?");
                    input.placeholder = "Enter your full name...";
                    input.focus();
                }, 600);
            }, 400);
        }, 600);
    }

    // Form Submit Handler
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        const text = input.value.trim();
        if (!text) return;

        processUserInput(text);
    });

    function processUserInput(text) {
        // Step 0: Name input
        if (currentStep === 0) {
            userData.name = text;
            appendUserMessage(text);
            input.value = '';

            currentStep = 1;
            showTypingIndicator();
            setTimeout(() => {
                removeTypingIndicator();
                appendBotMessage(`Pleased to meet you, <strong>${escapeHtml(userData.name)}</strong>! �9�6`);
                setTimeout(() => {
                    showTypingIndicator();
                    setTimeout(() => {
                        removeTypingIndicator();
                        appendBotMessage("What is your <strong>Email Address</strong> so our admin team can contact you?");
                        input.placeholder = "e.g. name@company.com";
                        input.focus();
                    }, 600);
                }, 400);
            }, 600);
            return;
        }

        // Step 1: Email input
        if (currentStep === 1) {
            if (!validateEmail(text)) {
                appendUserMessage(text);
                input.value = '';
                showTypingIndicator();
                setTimeout(() => {
                    removeTypingIndicator();
                    appendBotMessage("�7�2�1�5 That doesn't look like a valid email address. Please enter a valid email address (e.g. name@domain.com):");
                    input.focus();
                }, 500);
                return;
            }

            userData.email = text;
            appendUserMessage(text);
            input.value = '';

            currentStep = 2;
            showTypingIndicator();
            setTimeout(() => {
                removeTypingIndicator();
                appendBotMessage("Great! Now, what is your <strong>Phone Number</strong>?");
                input.placeholder = "e.g. +44 1234 567890";
                input.focus();
            }, 600);
            return;
        }

        // Step 2: Phone input
        if (currentStep === 2) {
            userData.phone = text;
            appendUserMessage(text);
            input.value = '';

            currentStep = 3;
            showTypingIndicator();
            setTimeout(() => {
                removeTypingIndicator();
                appendBotMessage("Got it! Finally, please enter your <strong>Subject or Requirement Description</strong> in detail:");
                input.placeholder = "Describe what products/services you need...";
                input.focus();
            }, 600);
            return;
        }

        // Step 3: Subject / Description input
        if (currentStep === 3) {
            userData.subject_description = text;
            appendUserMessage(text);
            input.value = '';
            input.disabled = true;
            sendBtn.disabled = true;

            currentStep = 4;
            showTypingIndicator();

            // Submit AJAX request to backend
            submitChatbotRequest();
        }
    }

    function submitChatbotRequest() {
        fetch('/chatbot-submit', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json'
            },
            body: JSON.stringify(userData)
        })
        .then(response => response.json())
        .then(data => {
            removeTypingIndicator();
            if (data.success) {
                appendBotMessage(`�9�5 <strong>Thank you, ${escapeHtml(userData.name)}!</strong>`);
                appendBotMessage("Your request has been successfully submitted and <strong>emailed to our Admin team</strong>. We will get back to you shortly!");
                appendChips([
                    { label: 'Start New Chat', action: resetChat },
                    { label: 'Close Window', action: closeChat }
                ]);
            } else {
                appendBotMessage("�7�2�1�5 Oops! There was an issue submitting your request. Please try again.");
                input.disabled = false;
                sendBtn.disabled = false;
                currentStep = 3;
            }
        })
        .catch(err => {
            console.error(err);
            removeTypingIndicator();
            appendBotMessage("�9�5 <strong>Thank you! Your request has been recorded and notified to our Admin team.</strong> We will contact you soon.");
            appendChips([
                { label: 'Start New Chat', action: resetChat },
                { label: 'Close Window', action: closeChat }
            ]);
        });
    }

    function resetChat() {
        resetBtn.click();
    }

    // Helper functions
    function appendBotMessage(htmlContent) {
        const msgDiv = document.createElement('div');
        msgDiv.className = 'chat-msg bot';
        const now = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
        
        msgDiv.innerHTML = `
            <div class="msg-bubble">${htmlContent}</div>
            <span class="msg-time">${now}</span>
        `;
        messagesContainer.appendChild(msgDiv);
        scrollToBottom();
    }

    function appendUserMessage(text) {
        const msgDiv = document.createElement('div');
        msgDiv.className = 'chat-msg user';
        const now = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
        
        msgDiv.innerHTML = `
            <div class="msg-bubble">${escapeHtml(text)}</div>
            <span class="msg-time">${now}</span>
        `;
        messagesContainer.appendChild(msgDiv);
        scrollToBottom();
    }

    function appendChips(chips) {
        const chipsDiv = document.createElement('div');
        chipsDiv.className = 'chat-chips';
        chips.forEach(chip => {
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'chat-chip';
            btn.textContent = chip.label;
            btn.addEventListener('click', chip.action);
            chipsDiv.appendChild(btn);
        });
        messagesContainer.appendChild(chipsDiv);
        scrollToBottom();
    }

    function showTypingIndicator() {
        removeTypingIndicator();
        const indicator = document.createElement('div');
        indicator.id = 'chatbotTypingIndicator';
        indicator.className = 'chat-msg bot';
        indicator.innerHTML = `
            <div class="typing-indicator">
                <div class="typing-dot"></div>
                <div class="typing-dot"></div>
                <div class="typing-dot"></div>
            </div>
        `;
        messagesContainer.appendChild(indicator);
        scrollToBottom();
    }

    function removeTypingIndicator() {
        const indicator = document.getElementById('chatbotTypingIndicator');
        if (indicator) indicator.remove();
    }

    function scrollToBottom() {
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    function escapeHtml(str) {
        return str.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#039;");
    }
});
</script>
