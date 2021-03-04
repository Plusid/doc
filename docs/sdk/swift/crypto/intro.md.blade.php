---
title: Getting Started
---

# Crypto

## Install package with CocoaPods

To integrate the ARK Swift Crypto in your project, add the following content to your `Podfile` :

```
'SwiftCrypto', :git => 'https://github.com/ARKEcosystem/swift-crypto.git', :tag => '1.0.1'
```

Afterward, install it by running `pod install`.

## Development

1. Fork the [package](https://github.com/ARKEcosystem/swift-crypto).
2. Clone your forked repository.

```bash
   git clone https://github.com/<githubusername>/swift-crypto
   ```

3. Next, move into the cloned directory.

```bash
   cd swift-crypto/Crypto
   ```

4. Install the dependencies.

```bash
   pod install
   ```

   Installing the dependency \(BitcointKit\) of this SDK will require a good bit of time. So after running `pod install` it might take up to 10 minutes to install the BitcoinKit dependency. This is due to the crypto dependencies it relies on, like secp256k, that are compiled from scratch during the install. Don't be alarmed when it looks like the installation got stuck. It's just the underlying dependencies taking their time.

   You will also need to install [Swiftlint](https://github.com/realm/SwiftLint) as an additional step, as that is used to lint our code. The easiest way to install this is by using Homebrew: `brew install swiftlint`.

5. Dependencies are now installed, you can now run the tests to see if everything is running like it should be opening the `Crypto.xcworkspace` in Xcode.
